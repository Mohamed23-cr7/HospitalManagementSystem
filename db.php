<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "abc_hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
