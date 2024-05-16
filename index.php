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
	<title>RESQNEST</title>
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
							<a href="https://www.facebook.com/"
								class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
										class="sr-only">Facebook</i></span></a>
							<a href="https://www.twitter.com/"
								class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i
										class="sr-only">Twitter</i></span></a>
							<a href="https://www.instagram.com/"
								class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="https://www.dribble.com/"
								class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i
										class="sr-only">Dribbble</i></span></a>
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
	<div class="hero-wrap js-fullheight" style="background-image: url('images/catndog.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-11 ftco-animate text-center">
					<h1 class="mb-4">We care about pets and strays</h1>

				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light ftco-no-pt ftco-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
					<div class="d-block services text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-blind"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Stop Buying Pets</h3>
							<p>
								When you buy a pet from a breeder or pet store, you're contributing to the demand for
								animals bred for profit. Many times, these animals come from places that prioritize
								profit over the health and well-being of the animals.
							</p>
						</div>

					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
					<div class="d-block services text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-dog-eating"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Adopt Strays</h3>
							<p>
								Stray pets often face harsh conditions, but with a little help, they can find their way
								into loving homes. Many strays are just waiting for someone to give them a second
								chance.
							</p>
						</div>

					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
					<div class="d-block services text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-grooming"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Stray Rescue</h3>
							<p>
								Stray animals often wander the streets, facing dangers and uncertainties. Our mission is
								to rescue these vulnerable pets, offering them safety, medical care, and a path to
								adoption.
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-5 d-flex">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
						style="background-image:url(images/about-1.jpg);">
					</div>
				</div>
				<div class="col-md-7 pl-md-5 py-md-5">
					<div class="heading-section pt-md-5">
						<h2 class="mb-4">Why Choose Us?</h2>
					</div>
					<div class="row">
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-stethoscope"></span></div>
							<div class="text pl-3">
								<h4>Pet Adoption</h4>
								<p>We help you to adopt pets for free. Just need to fill a form and it's done.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-customer-service"></span></div>
							<div class="text pl-3">
								<h4>Customer Supports</h4>
								<p>You can contact us 24/7 and also enjoy our facilities at a discounted rate.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-emergency-call"></span></div>
							<div class="text pl-3">
								<h4>Emergency Services</h4>
								<p>Saw a Stray in trouble? Don't panic just tell us about it and our team will reach
									there in no time.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-veterinarian"></span></div>
							<div class="text pl-3">
								<h4>Veterinary Help</h4>
								<p>Our expert Veterinary team will guide you and the charges of it will be solely used
									for Stray care.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="598">0</strong>
						</div>
						<div class="text">
							<span>Volunteers</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="850">0</strong>
						</div>
						<div class="text">
							<span>Professionals</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="50">0</strong>
						</div>
						<div class="text">
							<span>Veterinary</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="385">0</strong>
						</div>
						<div class="text">
							<span>Strays Rescued</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light ftco-faqs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-md-last">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
						style="background-image:url(images/indie.webp);">
						<a href="images/pet.mp4"
							class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<span class="fa fa-play"></span>
					</a>
					</div>
					<div class="d-flex mt-3">
						<div class="img img-2 mr-md-2" style="background-image:url(images/dog.jpeg);"></div>
						<div class="img img-2 ml-md-2" style="background-image:url(images/indie.webp);"></div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="heading-section mb-5 mt-5 mt-lg-0">
						<h2 class="mb-3">Frequently Asks Questions</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
					</div>
					<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						<div class="card">
							<div class="card-header p-0" id="headingOne">
								<h2 class="mb-0">
									<button href="#collapseOne"
										class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
										data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
										aria-controls="collapseOne">
										<p class="mb-0">How to Train an Adopted Pet?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
								<div class="card-body py-3 px-0">
									<ol>
										<li>Start with Basic Commands</li>
										<li>Use Positive Reinforcement</li>
										<li>Establish a Routine</li>
										<li>Socialize Early</li>
										<li>Be Patient and Consistent</li>
									</ol>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header p-0" id="headingTwo" role="tab">
								<h2 class="mb-0">
									<button href="#collapseTwo"
										class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
										data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
										aria-controls="collapseTwo">
										<p class="mb-0">How to Manage Your Pets?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body py-3 px-0">
									<ol>
										<li>Regular Feeding Schedule</li>
										<li>Exercise and Playtime</li>
										<li>Regular Vet Visits</li>
										<li>Training and Socialization</li>
										<li>Grooming and Hygiene</li>
									</ol>
								</div>
							</div>
						</div>


						<div class="card">
							<div class="card-header p-0" id="headingThree" role="tab">
								<h2 class="mb-0">
									<button href="#collapseThree"
										class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
										data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
										aria-controls="collapseThree">
										<p class="mb-0">What is the Best Grooming for Your Pets?</p>
										<i class="fa" aria-hidden="true"></i>
									</button>
								</h2>
							</div>
							<div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
								<div class="card-body py-3 px-0">
									<ol>
										<li>Brush Regularly</li>
										<li>Bathe Occasionally</li>
										<li>Trim Nails Carefully</li>
										<li>Clean Ears Gently</li>
										<li>Maintain Dental Health</li>
									</ol>
								</div>
							</div>
						</div>



					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
				 <h2>Affordable Packages</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="block-7">
						<div class="img" style="background-image: url(images/pricing1.jpeg);"></div>
						<div class="text-center p-4">
							<span class="excerpt d-block">Gold</span>
							<span class="price"><sup>₹</sup> <span class="number">499</span> <sub>/mos</sub></span>

							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
								<li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
								<li><span class="fa fa-check mr-2"></span>Free Supports</li>
							</ul>

							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="block-7">
						<div class="img" style="background-image: url(images/pricing2.jpeg);"></div>
						<div class="text-center p-4">
							<span class="excerpt d-block">Premium</span>
							<span class="price"><sup>₹</sup> <span class="number">799</span> <sub>/mos</sub></span>

							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check mr-2"></span>10 Vet Visit</li>
								<li><span class="fa fa-check mr-2"></span>5 Pet Spa</li>
								<li><span class="fa fa-check mr-2"></span>Free Supports</li>
							</ul>

							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="block-7">
						<div class="img" style="background-image: url(images/pricing3.jpeg);"></div>
						<div class="text-center p-4">
							<span class="excerpt d-block">Platinum</span>
							<span class="price"><sup>₹</sup> <span class="number">999</span> <sub>/mos</sub></span>

							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check mr-2"></span>Unlimited Vet Visit</li>
								<li><span class="fa fa-check mr-2"></span>20 Pet Spa</li>
								<li><span class="fa fa-check mr-2"></span>Free Supports</li>
							</ul>

							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Pets Gallery</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-1.jpg);">
						<a href="images/gallery-1.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Cat</span>
								<!-- <h2><a href="work-single.html">Persian Cat</a></h2> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-10.jpg);">
						<a href="images/gallery-10.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Dog</span>
								<!-- <h2><a href="work-single.html">Pomeranian</a></h2> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-3.jpg);">
						<a href="images/gallery-3.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Cat</span>
								<!-- <h2><a href="work-single.html">Sphynx Cat</a></h2> -->
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-4.jpg);">
						<a href="images/gallery-4.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Cat</span>
								<!-- <h2><a href="work-single.html">British Shorthair</a></h2> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-5.jpg);">
						<a href="images/gallery-5.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Dog</span>
								<!-- <h2><a href="work-single.html">Beagle</a></h2> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-6.jpg);">
						<a href="images/gallery-6.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Dog</span>
								<!-- <h2><a href="work-single.html">Pug</a></h2> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					</section>

	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
		style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-md-flex justify-content-end">
				<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
					<h2 class="mb-4">Free Consultation</h2>
	<form action="#" method="post" class="appointment"> <!-- Use POST method -->
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<div class="form-field">
						<div class="select-wrap">
							<select name="service" class="form-control" required>
								<option value="">Select a service</option>
								<option value="Dog Walk">Dog Walk</option>
								<option value="Pet Spa">Pet Spa</option>
								<option value="Pet Grooming">Pet Grooming</option>
								<option value="Pet Daycare">Pet Daycare</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="Your Name" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="vehicle_number" placeholder="Pet Breed">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<div class="input-wrap">
						<input type="date" class="form-control" name="appointment_date" required placeholder="Date">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<div class="input-wrap">
						<input type="time" class="form-control" name="appointment_time" required placeholder="Time">
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<textarea name="message" class="form-control" placeholder="Message"></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
				</div>
			</div>
		</div>
	</form>


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
<?php
// Database connection details
$servername = "localhost:3308"; // Change to your server name or IP address
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "CP"; // Change to your MySQL database name

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve the form data
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pet_breed = mysqli_real_escape_string($conn, $_POST['vehicle_number']);
    $appointment_date = mysqli_real_escape_string($conn, $_POST['appointment_date']);
    $appointment_time = mysqli_real_escape_string($conn, $_POST['appointment_time']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert the data into the 'appointments' table
    $sql = "INSERT INTO appointments (service, name, pet_breed, appointment_date, appointment_time, message) 
            VALUES ('$service', '$name', '$pet_breed', '$appointment_date', '$appointment_time', '$message')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "Appointment scheduled successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
