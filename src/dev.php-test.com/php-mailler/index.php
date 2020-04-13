<?php
// echo phpinfo();

$servername = "mariadb";
$database = "calendar";
$username = "root";
$password = "1a";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

