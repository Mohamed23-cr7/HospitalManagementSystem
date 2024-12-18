<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration - Hospital System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: white;
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: border 0.3s ease;
        }

        .input-field:focus {
            border-color: #ff7e5f;
        }

        .register-btn {
            width: 100%;
            padding: 15px;
            background-color: #ff7e5f;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .register-btn:hover {
            background-color: #feb47b;
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .back-to-login {
            display: block;
            margin-top: 10px;
            color: #2575fc;
            text-decoration: none;
            font-size: 14px;
        }

        .back-to-login:hover {
            color: #feb47b;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Register as a New Patient</h2>
        <form action="register_success.php" method="POST">
            <input type="text" class="input-field" name="username" placeholder="Enter Username" required>
            <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
            <button type="submit" class="register-btn">Register</button>
        </form>

        <a href="login.php" class="back-to-login">Already have an account? Login Here</a>
    </div>

</body>
</html>
