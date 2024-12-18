<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doctor_id = $_POST['doctor_id'];
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $contact = $_POST['phone']; 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "abc_hospital"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $check_sql = "SELECT * FROM doctors WHERE doctor_id = '$doctor_id'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "Error: Doctor ID '$doctor_id' already exists!";
    } else {
        $sql = "INSERT INTO doctors (doctor_id, name, specialty, contact) 
                VALUES ('$doctor_id', '$name', '$specialty', '$contact')";

        if ($conn->query($sql) === TRUE) {
            echo "New doctor registered successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
