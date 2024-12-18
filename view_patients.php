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

// Fetch all patient records
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

echo "<h2 class='title'>Registered Patients</h2>";

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table class='patient-table'>
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Reason for Visit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr class='table-row'>
                <td>" . $row['patient_id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['contact'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['reason'] . "</td>
                <td>
                    <a href='edit_patient.php?id=" . $row['patient_id'] . "' class='edit-btn'>Edit</a>
                    <a href='delete_patient.php?id=" . $row['patient_id'] . "' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this patient?\");'>Delete</a>
                </td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p class='no-patients'>No patients registered yet.</p>";
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            padding: 30px;
            color: #333;
            margin: 0;
        }

        h2.title {
            text-align: center;
            color: #4CAF50;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-transform: uppercase;
            animation: fadeIn 1.5s ease-out;
        }

        .patient-table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 2s ease-out;
            border-radius: 8px;
            overflow: hidden;
        }

        .patient-table thead {
            background-color: #4CAF50;
            color: white;
            font-size: 1.1em;
            text-transform: uppercase;
        }

        .patient-table th, .patient-table td {
            padding: 15px;
            text-align: center;
            font-size: 1em;
            border-bottom: 1px solid #ddd;
        }

        .patient-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .patient-table tr:hover {
            background-color: #f1f1f1;
            transform: translateY(-5px);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .patient-table td a.edit-btn, .patient-table td a.delete-btn {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin: 0 5px;
        }

        .patient-table td a.edit-btn {
            background-color: #2196F3;
            color: white;
        }

        .patient-table td a.edit-btn:hover {
            background-color: #0b7dda;
            transform: scale(1.1);
        }

        .patient-table td a.delete-btn {
            background-color: #f44336;
            color: white;
        }

        .patient-table td a.delete-btn:hover {
            background-color: #d32f2f;
            transform: scale(1.1);
        }

        .no-patients {
            font-size: 1.2em;
            text-align: center;
            color: #e74c3c;
            margin-top: 20px;
        }

        /* Animation for fading in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive design */
        @media screen and (max-width: 768px) {
            h2.title {
                font-size: 2em;
            }

            .patient-table {
                width: 100%;
                font-size: 14px;
            }

            .patient-table th, .patient-table td {
                padding: 10px;
            }
        }

        /* Additional styling for small screens */
        @media screen and (max-width: 480px) {
            .patient-table th, .patient-table td {
                padding: 8px;
            }

            .patient-table td a.edit-btn, .patient-table td a.delete-btn {
                padding: 6px 12px;
            }
        }

        /* Back button styling */
        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <a href="user.html" class="back-btn">Back to Home</a>
</body>
</html>
