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
	<title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
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
									class="ion-ios-arrow-forward"></i></a></span> <span>Veterinarian <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Meet Our Veterinary Doctor</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <!-- Doctor 1 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-1.jpeg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Aarav Gupta</h3>
                        <!-- <span class="position mb-2">Health Coach</span> -->
                        <div class="faded">
                            <p>I specialize in holistic health and nutrition, aiming to help my clients lead healthier lives.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-2.jpeg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Meena Sharma</h3>
                        <!-- <span class="position mb-2">Life & Business Coach</span> -->
                        <div class="faded">
                            <p>I focus on helping individuals achieve their career and life goals through coaching and guidance.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-3.jpg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Pratham Singh</h3>
                        <!-- <span class="position mb-2">Executive Coach</span> -->
                        <div class="faded">
                            <p>As an executive coach, my mission is to help professionals excel in their careers.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-4.jpg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Suresh Patel</h3>
                        <!-- <span class="position mb-2">Health Coach</span> -->
                        <div class="faded">
                            <p>My aim is to guide my clients toward a healthier lifestyle through balanced nutrition and fitness.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-cent"><span class="fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 5 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-5.jpg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Sanjay Kapoor</h3>
                        <!-- <span class="position mb-2">Executive Coach</span> -->
                        <div class="faded">
                            <p>My focus is on coaching executives to improve their leadership skills and achieve their career aspirations.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 6 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-6.jpg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Kavit Reddy</h3>
                        <!-- <span class="position mb-2">Health Coach</span> -->
                        <div class="faded">
                            <p>I'm dedicated to promoting physical fitness and a healthy lifestyle among my clients.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 7 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-7.jpg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Anjan Nair</h3>
                        <!-- <span class="position mb-2">Life Coach</span> -->
                        <div class="faded">
                            <p>My goal is to help individuals find their path in life and achieve personal fulfillment.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-twitter"></span></a></li>
                                <li la animate"><a href="#" class="d-flex align-items-center justify-content-center"><span fa fa-facebook"></span></a></li>
                                <li la animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-google"></span></a></li>
                                <li la animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor 8 -->
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('images/staff-8.jpg');">
                        </div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3>Dr. Manish Kumar</h3>
                        <!-- <span class="position mb-2">Executive Coach</span> -->
                        <div class="faded">
                            <p>I'm committed to supporting executives in navigating their career challenges and reaching their professional goals.</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-twitter"></span></a></li>
                                <li la animate"><a href="#" class="d-flex align-items-center justify-content-center"><span la fa-facebook"></span></a></li>
                                <li la animate"><a href="#" la d-flex align-items-center justify-content-center"><span fa google"></span></a></li>
                                <li la animate"><a href="#" la d-flex align-items-center justify-content-center"><span fa instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
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




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


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



</body>

</html>