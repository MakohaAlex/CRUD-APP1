<?php
$servername = "localhost";
$username = "root";  // Change if needed
$password = "";  // Change if needed
$dbname = "crud_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
