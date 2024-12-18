<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$patient_id = $_GET['id'];

$sql = "SELECT patient_id, name, contact, email, reason FROM patient WHERE patient_id = '$patient_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    $update_sql = "UPDATE patient SET name='$name', contact='$contact', email='$email', reason='$reason' WHERE patient_id='$patient_id'";

    if ($conn->query($update_sql) === TRUE) {
        echo "<div class='success-message'>Patient details updated successfully! <a href='view_patients.php'>Go back to the list</a></div>";
    } else {
        echo "<div class='error-message'>Error updating record: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/css/uikit.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            width: 60%;
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
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .back-btn {
            text-align: center;
            margin-top: 20px;
        }
        .back-btn a {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-btn a:hover {
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
    <h2>Edit Patient Details</h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        </div>

        <div class="form-group">
            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" required><?php echo $row['reason']; ?></textarea>
        </div>

        <button type="submit" class="btn">Update Patient</button>
    </form>

    <div class="back-btn">
        <a href="view_patients.php">Back to Patient List</a>
    </div>
</div>

</body>
</html>

<?php
$conn->close();
?>
