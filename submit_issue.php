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

// Generate a unique tracking ID
$tracking_id = uniqid('ISSUE-', true);

// Retrieve form data
$issue_type = mysqli_real_escape_string($conn, $_POST['issue_type']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

// Insert data into the database along with the tracking ID
$sql = "INSERT INTO issue_reports (tracking_id, issue_type, location, description, status) 
        VALUES ('$tracking_id', '$issue_type', '$location', '$description', 'Pending')";

if ($conn->query($sql) === TRUE) {
    echo "Issue reported successfully! Your Tracking ID is: <strong>$tracking_id</strong>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
