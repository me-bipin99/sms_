<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <link rel="stylesheet" href="style2.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/f7e50e2bfa.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }

        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .bg-light {
            background-color:none;
        }

        .pt-5 {
            padding-top: 3rem;
        }

        .pt-3 {
            padding-top: 1rem;
        }

        h4 {
            font-size: 1.5rem;
        }

        section {
            padding: 1rem 0;
        }

        .text-center {
            text-align: center;
        }

        .mb-5 {
            margin-bottom: 3rem;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 0rem;
        }

        .container {
            max-width: 1140px;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-lg-6,
        .col-12 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .pb-2 {
            padding-bottom: 0.5rem;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .text-right {
            text-align: right;
        }

        /* Grid container and card styles */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns each occupying 33.33% */
            gap: 20px; /* Increase the gap for better spacing */
           
            padding: 10px;
            margin-top: unset;
        }

        .grid-container > .news-card {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid black;
            border-radius: 10px; /* Slightly curved edges */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            text-align: center;
            font-size: 18px; /* Adjust font size */
            padding: 20px;
            position: relative;
        }

        .news-card .icon-calendar {
            pointer-events: none;
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
            padding: 10px 15px;
            background: white;
            border: 1px solid black;
            border-radius: 50%;
        }

        .news-card .icon-calendar_number {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .news-card .icon-calendar_month {
            font-size: 1rem;
        }

        .news-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0; /* Curved edges for the top of the image */
        }

        .card-body {
            padding: 15px; /* Adjust padding for card body */
        }

        .card-body h4 {
            font-size: 1.25rem; /* Adjust font size for card title */
            margin-bottom: 10px;
        }

        .card-body p {
            font-size: 1rem; /* Adjust font size for card text */
            margin-bottom: 20px; /* Add space between text and button */
        }

        .card-body a.btn {
            margin-top: 10px; /* Add margin at the top of the button */
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

    <?php
    include('includes/dbcon.php');
    $sql = "select * from news order by id desc";
    $res = mysqli_query($conn, $sql);
    if(!$res){
      echo "failed to fetch news updates";
    }
  ?>

  <section class="py-5 bg-light" id="updates">
    <div class="text-center mb-5">
      <h2>Recent Updates</h2>
      <div class="container">
        <div class="grid-container">
          
          <?php 
          if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              $img = $row['image'];
              $newsDate =  date("d", strtotime($row['date']));
              $newsMonth = date("M", strtotime($row['date']));
              $content = $row['content'];
          ?>
              <div class="news-card">
                <!-- Card -->
                <span class="icon-calendar shadow">
                    <span class="icon-calendar_number"><?= $newsDate  ?></span>
                    <span class="icon-calendar_month"><?= $newsMonth ?></span>
                  </span>
                <!-- Card image -->
                <div class="view overlay">
                  <img src="images/news/<?= $row['image'] ?>" alt="Card image cap">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card content -->
                <div class="card-body">
                  <!-- Title -->
                  <h4 class="card-title"><?php echo $row['heading'] ?></h4>
                  <!-- Text -->
                  <p class="card-text"><?php
                  if(strlen($content) > 90){
                    $sub_str = substr($content, 0, 90)."..."; 
                    echo $sub_str;
                  }
                  else{
                    echo $content;
                  }
                  ?></p>
                  <!-- Button -->
                  <a href="news.php?id=<?= $row['id'] ?>" class="btn btn-primary">Read More</a>
                </div>
                <!-- Card -->
              </div>
          <?php
            }
          }else{
            echo "No result found";
          }
            ?>
             
        </div>
      </div>
    </div>
  </section>

</body>

</html>
