<!DOCTYPE html>
<html>
<head>
    <title>Matthew J David</title>
    <!-- required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link to css stylesheet -->
    <link rel="stylesheet" href="style/style.css" type="text/css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- jQuery, Popper.js, Bootstrap JS -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="scripts/jquery-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- java script link -->
    <script src="scripts/main.js"></script>

</head>

<body>

	<!-- navigation bar -->
	<nav class="navbar fixed-top navbar-default navbar-expand-md navbar-dark bg-dark" id="top-of-page">
		<a class="navbar-brand" href="index.php">Matthew David</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#languages">Languages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#skills">Skills</a>
				</li>
				<li class="nav-item">
					<a href="https://github.com/mdavid50" target="_blank" class="nav-link">Github</a>
				</li>
				<li class="nav-item">
					<a href="https://www.linkedin.com/in/matthew-david-8b7079152/" target="_blank" class="nav-link">LinkedIn</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./documentation/matt-david-resume.pdf">Resume</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<!--parallax first section -->
	<section class="parallax-content" id="about">
		<div class="parallax">
			<div class="jumbotron-fluid bg-transparent text-center" id="welcome">
				<h1>Glad you could make it!</h1>
			</div>
		</div>
	</section>


	<!-- about Matt David -->
	<section class="p-5 solid mt-0">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-6">
					<h2>A Little About Me</h2>
					<p>In life I regularly find myself in pursuit of a greater challenge. I found myself lacking challenge and interest in my recent career as an electrician. I sought to take the skills I had learned like problem solving, dynamic thinking, and finding applicable solutions and apply them to something that would allow me to dream and create. Here is where coding has become my most desirable challenge yet. For the first time in a long time, I started waking up with a purpose again.
					</p>
					<p>When I take a brake from coding and learning, I can usually be found outdoors. Dirt biking, skiing, snowboarding, camping, hiking, and spending time with my little family is what relieves me from the strains of life.</p>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-6"><img class="img-fluid" src="./images/getting-ready-tiny.jpg" alt="picture of Matt David" id="about-image"></div>
			</div>
		</div>
	</section>

	<!-- parallax second section -->
	<div class="parallax-content parallax-content2" id="languages">
		<div class="parallax">
			<div class="jumbotron bg-transparent text-left">
				<h1>Languages I have learned</h1>
			</div>
		</div>
	</div>

	<!-- Languages I know -->
	<section class="p-5 solid mt-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Operating primarily with Linux and Windows, I have learned to code in...</h2>
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 m-3">

										<img src="images/linux-logo-small.jpeg" class="col-md-2 col-lg-1" alt="linux logo" id="howdy">
										<img src="images/apache-logo-small.png" class="col-md-2 col-lg-1" alt="apache logo" id="howdy">
										<img src="images/mysql-logo-small.jpeg" class="col-md-2 col-lg-1" alt="mysql logo" id="howdy">
										<img src="images/php-logo-small.jpeg" class="col-md-2 col-lg-1" alt="php logo" id="howdy">

							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 m-3">
									<img src="images/html-logo-small.png" class="col-md-2 col-lg-1" alt="html logo" id="howdy">
									<img src="images/css-logo-small.jpeg" class="col-md-2 col-lg-1" alt="css logo" id="howdy">
									<img src="images/js-logo-small.png" class="col-md-2 col-lg-1" alt="javascript logo" id="howdy">
									<img src="images/bootstrap-logo-small.png" class="col-md-2 col-lg-1" alt="bootstrap logo" id="howdy">
									<img src="images/jQuery-logo-small.jpeg" class="col-md-2 col-lg-1" alt="jQuery logo" id="howdy">
									<img src="images/json-logo-small.jpeg" class="col-md-2 col-lg-1" alt="json logo" id="howdy">
									<img src="images/angular-logo-small.png" class="col-md-2 col-lg-1" alt="angular logo" id="howdy">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- parallax third section -->
	<div class="parallax-content parallax-content3" id="skills">
		<div class="parallax">
			<div class="jumbotron bg-transparent text-right">
				<h1>My Other Attributes</h1>
				<h3>Soft skills gathered over time</h3>
			</div>
		</div>
	</div>

	<section class="p-5 solid mt-0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-lr-6">
					<h2>Skills</h2>
					<ul>
						<li>Public Speaking</li>
						<li>Practical Problem Solving</li>
						<li>Critical Communication</li>
						<li>Detail Oriented</li>
						<li>Customer Service and Satisfaction</li>
						<li>Time Management</li>
						<li>Self Sufficinet</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- parallax fourth section -->
	<div class="parallax-content parallax-content4" id="contact">
		<div class="parallax">
			<div class="jumbotron bg-transparent text-center">
				<h1>What can I do for you?</h1>
				<h3>I'd love to see what we can accomplish together.</h3>
			</div>
		</div>
	</div>

	<section class="p-5 solid mt-0">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lr-6">
					<h2>Contact</h2>
					<form id="contact-form" action="php/mailer.php" method="post" novalidate>

						<label>Name</label>
						<input name="name" id="name" placeholder="Type Here">

						<label>Email</label>
						<input name="email" type="email" id="email" placeholder="Type Here">

						<label>Message</label>
						<textarea name="message" placeholder="Type Here"></textarea>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LewlToUAAAAAD0kkIwEBUKexyWp-u-dkIh0KQQq"></div>

						<input id="submit" name="submit" type="submit" value="Submit">

					</form>

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
