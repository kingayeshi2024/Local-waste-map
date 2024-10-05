<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";  // Enter your MySQL root password
$dbname = "local_waste_map";  // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the tracking ID from the form
$tracking_id = mysqli_real_escape_string($conn, $_POST['tracking_id']);

// Query the database for the issue with this tracking ID
$sql = "SELECT * FROM issue_reports WHERE tracking_id = '$tracking_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the issue details
    $row = $result->fetch_assoc();
    echo "Tracking ID: <strong>" . $row['tracking_id'] . "</strong><br>";
    echo "Issue Type: " . $row['issue_type'] . "<br>";
    echo "Location: " . $row['location'] . "<br>";
    echo "Description: " . $row['description'] . "<br>";
    echo "Current Status: <strong>" . $row['status'] . "</strong><br>";
} else {
    echo "No issue found with Tracking ID: $tracking_id";
}

// Close the database connection
$conn->close();
?>
