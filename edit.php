<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc_hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the doctor ID from the URL
$doctor_id = $_GET['id'];

// Fetch the doctor's data to pre-fill the form
$sql = "SELECT doctor_id, name, specialty, contact FROM doctors WHERE doctor_id = '$doctor_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the updated data from the form
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $contact = $_POST['contact'];

    // Update the doctor details in the database
    $update_sql = "UPDATE doctors SET name='$name', specialty='$specialty', contact='$contact' WHERE doctor_id='$doctor_id'";

    if ($conn->query($update_sql) === TRUE) {
        echo "<p>Doctor details updated successfully! <a href='view_doctors.php'>Go back to the list</a></p>";
    } else {
        echo "<p>Error updating record: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/css/uikit.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            font-size: 14px;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #6a11cb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4e09b5;
        }
    </style>
</head>
<body>

    <h2>Edit Doctor Details</h2>

    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>

        <label for="specialty">Specialty:</label>
        <input type="text" name="specialty" value="<?php echo $row['specialty']; ?>" required><br><br>

        <label for="contact">Contact:</label>
        <input type="text" name="contact" value="<?php echo $row['contact']; ?>" required><br><br>

        <input type="submit" value="Update">
    </form>

</body>
</html>

<?php
$conn->close();
?>
