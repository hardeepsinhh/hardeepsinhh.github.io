<?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "mom");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$productname = mysqli_real_escape_string($conn, $_POST['product']);
$image = mysqli_real_escape_string($conn, $_POST['Product-Image']);

// Insert user data into the database
$sql = "INSERT INTO pr_data (name, phone, product,image) VALUES ('$name', '$phone', '$productname', '$image')";

if (mysqli_query($conn, $sql)) {
	echo "you query was submitted successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
