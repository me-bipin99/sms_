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
            <a href="login.php" >Login</a>
        </nav>

    </header>
    <style>
        body {
          font-family: Arial, sans-serif;
            background-color: #f5f5f5; 
            display: flex;
            justify-content: center; 
            align-items: center; /* center vertically */
            min-height: 90vh; 
           
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/s1.avif);
    background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            
            background-color: rgba(0, 0, 0, 0.4);
            margin-top:100px;
        }

        .container-login {
            width: 100%;
            max-width: 400px; 
            background-color: #fff; /* white background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* slight shadow */
            padding: 45px; 
            border-radius: 20px;
           
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form > div {
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
            font-weight: 300; /* lighter font weight */
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* ensure padding and border are included in width */
        }

        button {
            padding: 10px 25px;
            background-color: #007bff; 
            color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 auto; /* center the button horizontally */
            display: block; /* ensure the button takes full width */
        }

        button:hover {
            background-color: #0056b3; /* darker shade on hover */
        }

        a {
            color: #dc3545; /* red color for links */
        }

        a:hover {
            text-decoration: underline;
        }

    
    </style>
</head>

<body>
    <div class="container-login"tyle="margin-top: 40px;">
        <form action="login_details.php" method="POST">
            <!-- User input -->
            <div>
                <select id="userType" name="usertype" required>
                    <option value="" selected hidden disabled>Select User</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
                <label for="userType">User</label>
            </div>

            <!-- Username input -->
            <div>
                <input type="text" name="username" id="uname" placeholder="Enter your username" required/>
                <label for="uname">Username</label>
            </div>

            <!-- Password input -->
            <div>
                <input type="password" name="password" id="pwd" placeholder="Enter password" required/>
                <label for="pwd">Password</label>
            </div>

            <div>
                <!-- Checkbox -->
                <div>
                    <input type="checkbox" value="" id="form2Example3" />
                    <label for="form2Example3">Remember me</label>
                </div>
            </div>

            <div>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
    

    








</body>
</html>
