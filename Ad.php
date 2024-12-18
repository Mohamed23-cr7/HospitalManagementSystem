<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ff512f, #dd2476);
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
            animation: slideIn 1.5s ease;
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
            padding: 15px 30px;
            font-size: 18px;
            color: white;
            background-color: #4CAF50; 
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-btn:hover {
            background-color: #45a049; 
        }
        @keyframes slideIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, Admin!</h1>
        <p>Manage users, appointments, and more.</p>
        <a href="ad.html">
            <button class="login-btn">Login</button>
        </a>
    </div>
</body>
</html>
