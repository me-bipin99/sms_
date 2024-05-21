<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="css11.css">
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
            
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/s1.avif);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .container-signup {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 0px 20px 0px 20px;
            margin-top: -10px;
            border-radius: 20px;
        }

        h3 {
            margin-bottom: 20px;
            text-align: center;
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 0px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 0px;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            color: #dc3545;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container-signup">
        <h3>Signup Form</h3>
        <form action="signup_details.php" method="POST" onsubmit="return validation()">
            <div class="form-group">
                <select class="form-control" name="usertype" id="typeUser" required>
                    <option selected hidden disabled>Select User</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="fname" class="form-control" placeholder="First Name" id="vfname" required>
            </div>
            <div class="form-group">
                <input type="text" name="lname" class="form-control" placeholder="Last Name" id="vlname" required>
            </div>
            <div class="form-group">
                <select class="form-control" id="courseTitle" name="course">
                    <option selected hidden disabled>Select Faculty</option>
                    <option>Bsc.CSIT</option>
                    <option>BCA</option>
                    <option>BIM</option>
                    <option>BBS</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="contact" class="form-control" placeholder="Phone No." id="vcontact" required>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email Address" id="vemail" required>
            </div>
            <div class="form-group">
                <input type="text" name="uname" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="signup">Submit</button>
               
            </div>
        </form>
    </div>
    <script>
function validation(){

var vfname =document.getElementById("vfname").value;
if(vfname.length <2){
  document.getElementById("err_fname").innerHTML ="***Name should contain atleast 2 character"
  return false;
}
var check_name =/^[A-Za-z]+$/;
if(!vfname.match(check_name)){
  document.getElementById("err_fname").innerHTML ="***Only character allowed"
  return false;
}

var vlname =document.getElementById("vlname").value;
if(vlname.length <2){
  document.getElementById("err_lname").innerHTML ="***Name should contain atleast 2 character"
  return false;
}
if(!vlname.match(check_name)){
  document.getElementById("err_lname").innerHTML ="***Only character allowed"
  return false;
}

        var contactInput = document.getElementById("vcontact").value;
        var errorMessage = document.getElementById("err_contact");
        
        if (contactInput.length !== 10 || isNaN(contactInput)) {
            errorMessage.textContent = "Phone number must be exactly 10 digits";
            return false;
        } else {
            errorMessage.textContent = ""; 
            return true;
        }
    
    

var vemail = document.getElementById("vemail").value;
console.log(vemail);
if((vemail.search('.') == '-1') || (vemail.search('@') == '-1')){
  document.getElementById("err_email").innerHTML = "***Email not valid";
  return false;
}
if(vemail.indexOf('@')<=0){
  console.log(vemail);
  document.getElementById("err_email").innerHTML ="***Position of @ is not valid "
  return false;
}
if((vemail.charAt(vemail.length-4)!='.')&&(vemail.charAt(vemail.length-3)!='.')){
  document.getElementById("err_email").innerHTML ="***Position of . is not valid "
  return false;
}
document.querySelector('form').addEventListener('submit', function(event) {
        if (!validateContact()) {
            event.preventDefault();
}
}
)}
</script>
</body>

</html>
