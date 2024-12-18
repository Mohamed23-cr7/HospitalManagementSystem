<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, role) VALUES ('$name', '$password', '$role')";
    if ($conn->query($sql) === TRUE) {
        if ($role == "Admin") {
            header("Location: admin.php");
        } elseif ($role == "Patient") {
            header("Location: patient.php");
        } elseif ($role == "Doctor") {
            header("Location: doctor.php");
        } elseif ($role == "Receptionist") {
            header("Location: receptionist.php");
        }
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register.php" method="POST">
        <label for="name">Username:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="role">Role:</label><br>
        <select id="role" name="role" required>
            <option value="Admin">Admin</option>
            <option value="Patient">Patient</option>
            <option value="Doctor">Doctor</option>
            <option value="Receptionist">Receptionist</option>
        </select><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
