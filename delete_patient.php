<?php
$conn = new mysqli("localhost", "root", "", "abc_hospital");

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "DELETE FROM patient WHERE patient_id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>
