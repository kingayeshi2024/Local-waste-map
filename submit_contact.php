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

// Retrieve form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Insert data into the database
$sql = "INSERT INTO contact_submissions (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Your message has been submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
