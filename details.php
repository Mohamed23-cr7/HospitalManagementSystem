<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px 20px;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ff6347;
        }

        .carousel-item img {
            width: 100%;
            height: 60vh;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 10%;
            right: 10%;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 24px;
        }

        .button-section {
            text-align: center;
            margin-top: 50px;
        }

        .button-section button {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 20px;
            margin: 10px;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .button-section button:hover {
            background: linear-gradient(to left, #6a11cb, #2575fc);
            transform: scale(1.05);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .animated-section {
            animation: fadeInUp 1.5s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">ABC VIRTUAL</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="about us.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="Images/cardiology.jpg" class="d-block w-100" alt="Cardiology Service">
                <div class="carousel-caption">
                    <h3>Cardiology Service</h3>
                    <p>Advanced diagnostics and treatments for heart diseases.<br>Your health is our priority.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="Images/Compassionate_care.jpg" class="d-block w-100" alt="Compassionate Care ">
                <div class="carousel-caption">
                    <h3>Compassionate Care & Medical Technology</h3>
                    <p>Providing quality care with advanced technology.<br>Empathy and innovation in healthcare.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="Images/" class="d-block w-100" alt=" Medical Technology">
                <div class="carousel-caption">
                    <h3>Compassionate Care & Medical Technology</h3>
                    <p>Providing quality care with advanced technology.<br>Empathy and innovation in healthcare.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container animated-section">
        <h2 class="text-center mt-5">Our Services</h2>
        <p class="text-center">Explore our healthcare services that redefine the healthcare experience.</p>
    </div>

    <div class="button-section">
        <button onclick="window.location.href='patient_details.php'">Patient Details</button>
        <button onclick="window.location.href='view_doctors.php'">Doctor Details</button>
    </div>

    <footer>
        <p>&copy; 2024 ABC Virtual. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
