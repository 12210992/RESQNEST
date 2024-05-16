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
    <style>
        
      body {
    overflow-x: hidden; /* Hide horizontal scrollbar */
}
      /* Style for the button */
      .custom-button {
        margin-left: 605px;
          background-color: #ffffff; /* Brown */
          color: #8B4513; /* White */
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          text-decoration: none;
      }
      /* Hover effect for the button */
      .custom-button:hover {
          background-color: #7c3514; /* Darker brown on hover */
          color: #ffffff;
      }
  </style>
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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
	            <h1 class="mb-4 bread">Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light" style="background-color: #00bd56 !important; color:aliceblue;">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"  style="color:aliceblue;">Blogs</h2>
          </div>
        </div>   

    <?php
                $servername = "localhost:3308";
                $username = "root";
                $password = "";
                $dbname = "CP";


              $conn = new mysqli($servername, $username, $password, $dbname);

              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
                $e_id = $_GET['delete'];
                // Delete the flight record from the database
                $deleteSql = "DELETE FROM posts WHERE id = $id;";
                if (mysqli_query($conn, $deleteSql) === TRUE) {
                    echo "<p class='success'>Blog deleted successfully.</p>";
                } else {
                    echo "<p class='error'>Error deleting Blog: " . $conn->error . "</p>";
                }
            }


            // SQL query to select title, author, and image from the posts table
            $results_per_page = 3; // Number of posts per page
            $sql = "SELECT COUNT(*) AS total FROM posts";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $total_pages = ceil($row["total"] / $results_per_page);

            // Get current page number
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            // Calculate the starting point for the posts on the current page
            $start_from = ($page - 1) * $results_per_page;

            // SQL query to select title, author, and image from the posts table with pagination
            $sql = "SELECT id, title, author, image FROM posts LIMIT $start_from, $results_per_page";
            $result = $conn->query($sql);


            echo '<div class="row">';
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '<div class="col-sm col-md-6 col-lg-4 ftco-animate">'.'<div class="room">';
                  echo '<div class="row">';
                  echo '<div class="col-sm col-md-12 col-lg-12 ftco-animate">';
                  echo '<div class="room">';
                  $imageUrl = $row['image'];
                  echo '<a href="'.$imageUrl.'" class="img d-flex justify-content-center align-items-center" style="background-image: url('.$imageUrl.');">';
                  echo '<div class="icon d-flex justify-content-center align-items-center"><span class="icon-search2"></span></div>';
                  echo '</a>';
                  echo '<div class="text p-3 text-center">';
                  echo '<h3 class="mb-3">'. $row["title"] . '</a></h3>';
                  echo '<p><span class="price mr-2" style="font-size: 15px;">' . $row["author"] . '</span> <span class="per">blogger</span></p>';
                  echo '<hr>';
                  echo '<p class="pt-1">'.'<a href="read.php?id='.$row["id"].'" class="btn-custom">'.'Read More <span class="icon-long-arrow-right"></span></a></p>';
                  if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') {
                    echo "<a href='edit.php?id={$row['id']}' class='edit-button'>Edit</a><br>";
                    echo "<a href='delete.php?id={$row['id']}' class='delete-button'>Delete</a><br>";
                }
                      echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  
                }
            } else {
                echo "0 results";
            }
            echo '</div>';
            $conn->close();
            ?>
            
    	</div>

    <!-- Pagination links -->
    <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                            <li class="<?php if ($i == $page) echo 'active'; ?>"><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br>
    <a class="read-more-btn custom-button" style="margin-left: 700px;" href="submit_post.php">Submit Post</a>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>