<?php
$hostname = "localhost";
$database = "dbdss";
$username = "root";
$password = "";
$port = 3006;
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect());
}
?>