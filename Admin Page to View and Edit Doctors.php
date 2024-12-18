<?php
include 'db.php';
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["doctor_id"] . " - Name: " . $row["name"] . 
             " - Specialty: " . $row["specialty"] . " - Phone: " . $row["phone"];
        echo "<a href='edit_doctor.php?id=" . $row["doctor_id"] . "'>Edit</a>";
        echo "<a href='delete_doctor.php?id=" . $row["doctor_id"] . "'>Delete</a>";
    }
} else {
    echo "0 results";
}
?>
