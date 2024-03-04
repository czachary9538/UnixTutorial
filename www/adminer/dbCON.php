<?php
$servername = "localhost";
$username = "iste240t08";
$password = "Seta5=unsharpened";
$dbname = "iste240t08";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}