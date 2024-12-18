<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            animation: zoomIn 1.5s ease;
        }
        .container h1 {
            font-size: 50px;
            margin-bottom: 10px;
        }
        .container p {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .login-btn {
            background: linear-gradient(to right, #ff512f, #dd2476);
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 20px;
            margin-top: 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }
        .login-btn:hover {
            background: linear-gradient(to left, #ff512f, #dd2476);
            transform: scale(1.05);
        }
        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .back-btn {
            display: inline-block;
            padding: 12px 24px;
            margin-top: 30px;
            background-color: #fff;
            color: #ff7e5f;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: pulse 1.5s infinite;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-btn:hover {
            background-color: #ff7e5f;
            color: white;
            transform: scale(1.1);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .back-btn i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, Doctor!</h1>
        <p>View and update your appointments.</p>
        <a href="Doctor Registration.php">
            <button class="login-btn">Login</button>
        </a><br>
        <a href="user.html" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to User Page
        </a>
    </div>
</body>
</html>
