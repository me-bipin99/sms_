<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="style1.css">
    <script src="script1.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/s1.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 1140px;
            margin: auto;
            padding: 20px;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: flex-start; /* Align items at the top */
            margin-top: 100px; /* Adjust this value as needed */
        }

        .card1, .card2 {
            padding: 20px;
            border-radius: 8px;
        }

        .card1 {
            width: 45%;
            background-color: rgba(255, 255, 255, 0.8); /* Light background color */
            margin-right: 20px;
        }

        .card2 {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 35%;
            background-color: #fff;
            color: black;
        }

        .card2 input, .card2 textarea {
            width: calc(100% - 20px); /* Adjust width minus padding */
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .card2 input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .card2 input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .call-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .call-button:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <span class="hamburger-btn material-symbols-rounded">menu</span>
        <a href="#" class="logo">
            <h2>SMS</h2>
        </a>
        <ul class="links">
            <span class="close-btn material-symbols-rounded">close</span>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="news.php">Updates</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <a href="login.php">Login</a>
    </nav>
</header>

<div class="container">
    <!-- Card 1 -->
    <div class="card1">
        <h2>School Management System</h2>
        <p>This is our school management system Homepage.</p>
        <a href="tel:9841300727" class="call-button">Call Us</a>
    </div>
    <!-- Card 2 -->
    <div class="card2">
        <h4 class="text-dark">Inquiry Form</h4>
        <form action="insert_query.php?id=1" method="POST" onsubmit="return validation()">
            <input type="text" name="name" placeholder="Your name" required class="form-control" id="fname">
            <span id="a" style="color: red; font-weight: bold;"></span>
            <input type="email" name="email" placeholder="Your email" class="form-control" id="email">
            <span id="b" style="color: red; font-weight: bold;"></span>
            <input type="number" name="phone" placeholder="Your mobile" class="form-control" id="contact">
            <span id="c" style="color: red; font-weight: bold;"></span>
            <textarea class="form-control" name="message" placeholder="Your query" cols="30" rows="2"></textarea>
            <input class="btn btn-primary shadow px-5" name="submit" type="submit" value="Submit">
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 BeeNix-project</p>
</footer>

<script>
function validation() {
    var first_name = document.getElementById("fname").value;
    var correct = /^[A-Za-z]+$/;
    if (first_name.length < 3) {
        document.getElementById("a").innerHTML = "***name should be more than 2 characters";
        return false;
    }
    if (!first_name.match(correct)) {
        document.getElementById("a").innerHTML = "***name should contain characters only";
        return false;
    }

    var vemail = document.getElementById("email").value;
    if (vemail.indexOf("@") <= 0 || 
        (vemail.charAt(vemail.length - 4) != "." && vemail.charAt(vemail.length - 3) != ".")) {
        document.getElementById("b").innerHTML = "***invalid email format";
        return false;
    }

    var phone = document.getElementById("contact").value;
    if (phone.length !== 10 || isNaN(phone)) {
        document.getElementById("c").innerHTML = "*** Number should be exactly 10 digits and numeric only";
        return false;
    }
    document.getElementById("c").innerHTML = ""; // Clear any previous error message
    return true;

}
</script>

</body>
</html>
