<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT doctor_id, name, specialty, contact FROM doctors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Doctors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/css/uikit.min.css">
    <style>
        @keyframes gradientAnimation {
            0% {
                background-color: #afff33;
            }
            50% {
                background-color: #ff7e5f;
            }
            100% {
                background-color: #6a11cb;
            }
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #750a6c, #2575fc);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            padding: 20px;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #f1c0ed;
            font-color: #f1c0ed;
        }

        th {
            background-color: #5b320b;
            color: #ffff;
        }

        tr:nth-child(even) {
            background-color: #340866;
        }

        .btn {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #4e09b5;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .btn-edit:hover {
            background-color: #3b078a;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        h2 {
            color: white;
            font-size: 2rem;
            text-align: center;
            margin-top: 50px;
        }

        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            text-align: center;
            background-color: #6a11cb;
            color: white;
            font-size: 1rem;
            border-radius: 50px;
            text-decoration: none;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #ff7e5f;
            transform: scale(1.1);
        }

        .btn-back:active {
            transform: scale(0.9);
        }
    </style>
</head>
<body>

    <h2>Registered Doctors</h2>

    <table>
        <thead>
            <tr>
                <th>Doctor ID</th>
                <th>Name</th>
                <th>Specialty</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["doctor_id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["specialty"] . "</td>
                            <td>" . $row["contact"] . "</td>
                            <td>
                                <a href='edit.php?id=" . $row["doctor_id"] . "' class='btn btn-edit'>Edit</a>
                                <a href='delete.php?id=" . $row["doctor_id"] . "' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this doctor?\");'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No doctors registered yet.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <a href="details.php" class="btn-back">Back</a>

</body>
</html>
