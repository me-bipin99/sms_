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

<!--
  <div class="container">
       
        <div class="card1">
            <h2> School Management System</h2>
            <p>This is our school management system Homepage. </p>
            <a href="tel:+123456789" class="call-button">Call Us</a>
        </div>
        
        <div class="card2 form-container">

       <h4 class="text-dark">Inquiry Form</h>
              <form action="insert_query.php?id=1" method="POST"  onsubmit="return validation()">
                <div class="form-group">
                  <div class="card-body">
                    <div class="mb-4">
                      <input type="text" name="name" placeholder="Your name" required class="form-control" id="fname">
                    </div>
                    <span id="a"class="text-danger font weight-bold"></span>
                    <div class="mb-4">
                      <input type="email" name="email" placeholder="Your email" class="form-control" id="email">
                      <span id="b"class="text-danger font weight-bold"></span>
                    </div>
                    <div class="mb-4">
                      <input type="number" name="phone" placeholder="Your mobile" class="form-control"id="contact">
                      <span id="c"class="text-danger font weight-bold"></span>
                    </div>
                    <div class="mb-4">
                      <textarea class="form-control" name="message" placeholder="Your query" name="message" id="" cols="30" rows="2"></textarea>
                    </div>
                    <input class="btn btn-primary shadow px-5" name="submit" type="submit" value="Submit">
                  </div>
                </div>
-->
<div style="display: flex; justify-content: space-between; align-items: flex-start; margin: 20px; margin-bottom: 150px;">
    <!-- Card 1 -->
    <div style=" padding: 20px; border-radius: 8px; width: 45%; background-color:none; margin-right: 20px;">
        <h2>School Management System</h2>
        <p>This is our school management system Homepage.</p>
        <a href="tel:9841300727" class="call-button">Call Us</a>
    </div>
    <!-- Card 2 -->
    <div style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 8px; width: 35%; background-color: #fff; margin-left: 20px;">
        <h4 class="text-dark">Inquiry Form</h4>
        <form action="insert_query.php?id=1" method="POST" onsubmit="return validation()" style="display: flex; flex-direction: column;">
            <div style="margin-bottom: 16px;">
                <input type="text" name="name" placeholder="Your name" required class="form-control" id="fname">
            </div>
            <span id="a" style="color: red; font-weight: bold;"></span>
            <div style="margin-bottom: 16px;">
                <input type="email" name="email" placeholder="Your email" class="form-control" id="email">
                <span id="b" style="color: red; font-weight: bold;"></span>
            </div>
            <div style="margin-bottom: 16px;">
                <input type="number" name="phone" placeholder="Your mobile" class="form-control" id="contact">
                <span id="c" style="color: red; font-weight: bold;"></span>
            </div>
            <div style="margin-bottom: 16px;">
                <textarea class="form-control" name="message" placeholder="Your query" cols="30" rows="2"></textarea>
            </div>
            <input class="btn btn-primary shadow px-5" name="submit" type="submit" value="Submit">
        </form>
    </div>
</div>

            <script>
   function validation(){

var first_name =document.getElementById("fname").value;
var correct =/^[A-Za-z]+$/;
if(first_name.length <3){
  document.getElementById("name").innerHTML ="***name should be more then 2 "
  return false;
}
if(first_name.match(correct)){
  true;
}
else{
  document.getElementById("a").innerHTML ="***name should be  charcter only"
  return false;
}


var vemail=document.getElementById("email").value;
if(vemail.indexOf("@")<=0){
  document.getElementById("b").innerHTML ="***position of @ in not valid "
  return false;
}
if((vemail.charAt(vemail.length-4)!=".")&&(vemail.charAt(vemail.length-3)!=".")){
  document.getElementById("b").innerHTML ="***position of . in not valid "
  return false;
}

var phone =document.getElementById("number").value;

 if(phone.length !=10){
  document.getElementById("c").innerHTML ="**number should be 10 "
  return false;
}
if(isNaN(phone)){
  document.getElementById("c").innerHTML ="***only number  are allowed"
  return false;
}


          }
            </script>
        </div>
    </div>
</section>
</div>









<footer>
        <p>&copy; 2024 BeeNix-project</p>
        </div>
    </footer>








</body>
</html>