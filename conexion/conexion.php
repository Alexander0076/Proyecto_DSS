<?php
$hostname = "localhost:3308";
// $hostname = "localhost";
$database = "dbdss";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect());
}
?>