<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$doctor_id = $_GET['id'];

$sql = "DELETE FROM doctors WHERE doctor_id = '$doctor_id'";

if ($conn->query($sql) === TRUE) {
    echo "Doctor deleted successfully! <a href='view_doctors.php'>Go back to the list</a>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
