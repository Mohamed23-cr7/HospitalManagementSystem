<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/css/uikit.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            background-size: 300% 300%;
            animation: backgroundAnimation 10s infinite ease-in-out;
        }

        @keyframes backgroundAnimation {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .form-container {
            width: 90%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            color: #333;
        }

        input {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.2);
            outline: none;
        }

        button {
            background-color: #6a11cb;
            color: white;
            font-size: 16px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #4e0eaa;
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.98);
        }
        .back-btn, .login-btn {
            display: inline-block;
            padding: 10px 10px;
            margin-top: 30px;
            background: #e74a44;
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
    <div class="form-container">
        <h2>Doctor Registration</h2>
        <form method="post" action="user.html">
            <label for="doctor_id">Doctor ID:</label>
            <input type="text" name="doctor_id" id="doctor_id" placeholder="Enter Doctor ID" required>
            
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Name" required>
            
            <label for="specialty">Specialty:</label>
            <input type="text" name="specialty" id="specialty" placeholder="Enter Specialty" required>
            
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" required>
            
            <button type="submit">Register Doctor</button>
        </form><br>
        <a href="user.html" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to User Page
        </a>
    </div>
    
</body>
</html>
