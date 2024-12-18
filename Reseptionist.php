<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #ff6a00, #ee0979, #ff512f);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
            font-family: 'Roboto', sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            text-align: center;
            animation: fadeInUp 2s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 60px;
            margin-bottom: 20px;
            color: #fffcf9;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        p {
            font-size: 24px;
            color: #fffcf9;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .back-btn, .login-btn {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 30px;
            background: #ff512f;
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .back-btn:hover, .login-btn:hover {
            transform: scale(1.1);
            background: #ff6a00;
        }

        .back-btn i {
            margin-right: 10px;
        }

        .back-btn {
            animation: pulseButton 2s infinite;
        }

        @keyframes pulseButton {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .login-btn {
            background: linear-gradient(to right, #ff512f, #dd2476);
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, Receptionist!</h1>
        <p>Manage patient appointments and details with ease.</p>
        <a href="ab.html">
            <button class="login-btn">Login</button>
        </a><br>
        <a href="user.html" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to User Page
        </a>
    </div>
</body>
</html>
