<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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
<head>
    <meta charset="utf-8">
    <meta name="viewport" Address="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet'
        type='text/css'>
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+91 8468983644</a>
						<a href="#"><span class="fa fa-paper-plane mr-1"></span> resqnest@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-Address-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-Address-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-Address-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-Address-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-Address-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span class="flaticon-pawprint-1 mr-2"></span>RESQNEST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item <?php echo ($current_page == 'vet.php') ? 'active' : ''; ?>"><a href="vet.php" class="nav-link">Veterinarian</a></li>

                <!-- Services Dropdown -->
                <li class="nav-item dropdown <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="services.php">Adopt</a>
                        <a class="dropdown-item" href="Rescue.php">Rescue</a>
                        <a class="dropdown-item" href="about.php">Pet-Sitting</a>
                    </div>
                </li>

                <li class="nav-item <?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>"><a href="gallery.php" class="nav-link">Gallery</a></li>
                <li class="nav-item <?php echo ($current_page == './blog/index.php') ? 'active' : ''; ?>"><a href="./blog/index.php" class="nav-link">Blog</a></li>
                <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php" class="nav-link">Contact</a></li>
				<!-- Conditional login/logout based on session status -->
					<?php if ($username == 'Login'): ?>
					<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
					<?php else: ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>
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
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Rescue</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-appointment ftco-section bg-light">
        <div class="container">
            <div class="row justify-Address-center">
                <div class="col-md-8">
                    <div class="ftco-animate">
                        <h2>Rescue a Pet</h2>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <!-- Form action and method -->
                            <div class="form-group">
                                <label for="Name">Full Name</label>
                                <input type="text" class="form-control" name="Name" id="Name" required
                                    placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number </label>
                                <input type="tel" class="form-control" name="mobile" id="mobile" required
                                    placeholder="Enter your mobile number">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" required
                                    placeholder="Enter your address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Image">Image (Upload file)</label>
                                <input type="file" class="form-control-file" name="Image" id="Image" required>
                            </div>
                            <div class="form-group">
                                <label for="petType">Select Animal</label>
                                <select class="form-control" name="petType" id="petType" required>
                                    <option value="">Choose a Animal</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                    <option value="cat">Cows</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    		<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Petsitting</h2>
					<ul class="ftco-footer-social p-0">
						<li class="ftco-animate"><a href="https://www.twitter.com/" data-toggle="tooltip" data-placement="top"
								title="Twitter"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="top"
								title="Facebook"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="https://www.instagram.com/" data-toggle="tooltip" data-placement="top"
								title="Instagram"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Latest News</h2>
					<div class="block-21 mb-4 d-flex">
						<a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="./blog/index.php">Read About Pet care on our Blog</a></h3>
							<div class="meta">
								<div><a href="#"><span class="icon-calendar"></span> April 7, 2024</a></div>
								
							</div>
						</div>
					</div>
					<div class="block-21 mb-4 d-flex">
						<a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="./blog/index.php">Obesity in Dog</a></h3>
							<div class="meta">
								<div><a href="#"><span class="icon-calendar"></span> April 9, 2024</a></div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
					<h2 class="footer-heading">Quick Links</h2>
					<ul class="list-unstyled">
						<li><a href="index.php" class="py-2 d-block">Home</a></li>
						<li><a href="about.php" class="py-2 d-block">About</a></li>
						<li><a href="./blog/index.php" class="py-2 d-block">Blog</a></li>
						<li><a href="contact.php" class="py-2 d-block">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map"></span><span class="text">Ground Floor, next to Axis Bank Branch, Kalyani Nagar, Pune, Maharashtra</span></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 9322061336</span></a></li>
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span
										class="text">resqnest@gmail.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> 
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>




    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://raw.githubuserAddress.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
    <script src="./donate.js"></script>
</body>

</html>
<?php

// Check if user or admin is logged in
if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name'])) {
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Database connection parameters
        $servername = "localhost:3308";
        $db_username = "root";
        $password = "";
        $dbname = "CP"; // Using "CP" for this example

        // Create connection
        $conn = new mysqli($servername, $db_username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $Name = $_POST['Name'];
        $Mobile = $_POST['mobile']; // Getting data from the form
        $Address = $_POST['address']; 

        // File upload handling
        $targetDir = "uploads/";  // Directory to store the uploaded files
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);  // Create directory if it doesn't exist
        }

        $image = "";  // Default image path as empty
        if (isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK) {  // Check if an image is uploaded
            $fileInfo = pathinfo($_FILES['Image']['name']);
            $extension = strtolower($fileInfo['extension']);  // Get the file extension
            $allowedExtensions = ['png', 'jpg', 'jpeg'];  // Allow only certain file types

            if (in_array($extension, $allowedExtensions)) {
                $uniqueFileName = uniqid() . "." . $extension;  // Generate a unique file name
                $targetFile = $targetDir . $uniqueFileName;  // Full path for storing the file

                if (move_uploaded_file($_FILES['Image']['tmp_name'], $targetFile)) {  // If upload is successful
                    $image = $targetFile;  // Store the path in the variable
                } else {
                    echo "Error moving the uploaded file.";
                }
            } else {
                echo "Invalid file type. Please upload PNG or JPG images.";
            }
        } else {
            echo "No image uploaded or upload error.";
        }

        // Prepare and execute SQL statement
        $sql = "INSERT INTO `rescue` (`Name`, `Mobile`, `Address`, `date`, `image`) VALUES (?, ?, ?, CURRENT_TIMESTAMP, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $Name, $Mobile, $Address, $image);  // Bind the parameters

        $stmt->execute();

        if ($stmt->affected_rows > 0) {  // Check if the insertion was successful
            header("Location: index.php");  // Redirect on success
            exit();
        } else {
            echo "Database insertion error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
} else {
    // If no user or admin is logged in, prompt to login
    
    exit();  // Ensure the script doesn't continue running after redirect
}
?>
