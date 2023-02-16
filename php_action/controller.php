<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


//Set charcode
mysqli_set_charset($connection,"utf8");

// Check connection
if (mysqli_connect_error()) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>