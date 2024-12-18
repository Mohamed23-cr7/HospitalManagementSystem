<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "abc_hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect patient details from the form
    $patient_id = $_POST['patient_id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // Insert data into the database
    $sql = "INSERT INTO patient (patient_id, name, contact, email, reason) 
            VALUES ('$patient_id', '$name', '$contact', '$email', '$reason')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>New patient registered successfully!</div>";
    } else {
        echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

// Fetch all patient records to display
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/css/uikit.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-edit {
            background-color: #FFA500;
        }
        .btn-delete {
            background-color: #FF6347;
        }
        .back-btn {
            display: block;
            text-align: center;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-btn:hover {
            background-color: #45a049;
        }
        .success-message, .error-message {
            text-align: center;
            padding: 10px;
            margin: 10px 0;
            font-weight: bold;
        }
        .success-message {
            color: green;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
        .error-message {
            color: red;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registered Patients</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Reason</th>
                    <th>Actions</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['patient_id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['contact'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['reason'] . "</td>
                    <td>
                        <a href='edit_patient.php?id=" . $row['patient_id'] . "' class='btn btn-edit'>Edit</a>
                        <a href='delete_patient.php?id=" . $row['patient_id'] . "' class='btn btn-delete'>Delete</a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<div class='error-message'>No patients registered yet.</div>";
    }
    ?>

    <a href="details.php" class="back-btn">Back to User Page</a>
</div>

</body>
</html>

<?php
$conn->close();
?>
