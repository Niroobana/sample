<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = "";     // Replace with your DB password
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$course = $_POST['course'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (name, email, age, course) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $age, $course);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
