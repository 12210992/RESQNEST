<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet-Express</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.jpeg" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
// Start session to check user login status
session_start();

// Initialize username variable
$username = "Login";

// Check if user is logged in
if(isset($_SESSION['user_name'])) {
    // User is logged in, set username
    $username = $_SESSION['user_name'];
} elseif(isset($_SESSION['admin_name'])) {
    // Admin is logged in, set username
    $username = $_SESSION['admin_name'];
}
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Pet-Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="./index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                
                <?php if ($username == "Login"): ?>
                    <li class="nav-item"><a href="../login.php" class="nav-link">Login</a></li>
                <?php else: ?>
                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $username; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
	            <h1 class="mb-4 bread">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section contact-section bg-light" style="background-color: #00bd56 !important;">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3" style=" color:aliceblue !important;">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span>	Ground Floor, next to Axis Bank Branch, Kalyani Nagar, Pune, Maharashtra</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+91 9322061336</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@civiltà.com">info@Pet-Express.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website:</span> <a href="index.php">pet-express.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact.php" method="post" class="bg-white p-5 contact-form"> 
    <div class="form-group">
        <input type="text" name="contact_no" class="form-control" placeholder="Your contact no." required>
    </div>
    <div class="form-group">
        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
    </div>
    <div class="form-group">
        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
    </div>
</form>

          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white" style="background-image: url(images/indie.webp); background-size:cover;"></div>
          </div>
        </div>
      </div>
    </section>



    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Pet-Express</h2>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="blog.php" class="py-2 d-block">Blog</a></li>
                <li><a href="about.php" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
                <li><a href="about.php" class="py-2 d-block">About Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Ground Floor, next to Axis Bank Branch, Kalyani Nagar, Pune, Maharashtra</span></li>
	                <li><a><span class="icon icon-phone"></span><span class="text">+91 9322061336</span></a></li>
	                <li><a><span class="icon icon-envelope"></span><span class="text">info@Pet-Express.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php

// Database connection details
$servername = "localhost:3308"; // Adjust as needed
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "CP"; // Change to your database name

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user or admin is logged in
$logged_in_user = "";
if (isset($_SESSION["user_name"])) {
    $logged_in_user = $_SESSION["user_name"];
} elseif (isset($_SESSION["admin_name"])) {
    $logged_in_user = $_SESSION["admin_name"];
} else {
    die("No user logged in. Please log in to submit the form.");
}

// Ensure the request method is POST (i.e., form submission)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data safely, avoiding undefined constant errors
    $contact_no = $_POST["contact_no"] ?? ""; // Get the contact number
    $subject = $_POST["subject"] ?? ""; // Get the subject
    $message = $_POST["message"] ?? ""; // Get the message

    // Validate required fields
    if (empty($contact_no) || empty($subject) || empty($message)) {
        die("All fields are required. Please fill in the form completely.");
    }

    // Prepare the SQL statement to insert into the database
    $stmt = $conn->prepare("INSERT INTO form_submissions (user_name, contact_no, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $logged_in_user, $contact_no, $subject, $message);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "Your message has been submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Inform if the request is not a POST
    echo "This script should be accessed via a POST request (e.g., form submission).";
}

// Close the database connection
$conn->close();
?>
