<?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Insert user data into the database
$sql = "INSERT INTO pr_data (username, password, email) VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $sql)) {
	echo "User created successfully!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
