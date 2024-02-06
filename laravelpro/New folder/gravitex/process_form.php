<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// echo "Connection Successful<br>";

// Escape user inputs to prevent SQL injection
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['mobile']);

// Insert data into the table
$sql = "INSERT INTO `form` (`name`, `email`, `mobile`) VALUES ('$name', '$email', '$number')";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "The record has been inserted successfully!<br>";
} else {
  echo "The record was not inserted successfully because of this error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>