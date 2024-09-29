<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vunue_look";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$a = $_POST['name'];
$b = $_POST['email'];
$c  = $_POST['message'];

$sql = "INSERT INTO form (name1, email1,  message1) VALUES ('$a', '$b','$c)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>