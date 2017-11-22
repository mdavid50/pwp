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
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Languages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Skills</a>
				</li>
				<li class="nav-item">
					<a href="https://github.com/mdavid50" target="_blank" class="nav-link">Github</a>
				</li>
				<li class="nav-item">
					<a href="https://www.linkedin.com/in/matthew-david-8b7079152/" target="_blank" class="nav-link">LinkedIn</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./documentation/matthew-david-resume.pdf">Resume</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<!--parallax first section -->
	<section class="parallax-content">
		<div class="parallax">
			<div class="jumbotron bg-transparent text-center">
				<h1>Glad you could make it!</h1>
				<p class="lead">Thanks for taking the time to check out what I'm capable of!</p>
			</div>
		</div>
	</section>


	<!-- about Matt David -->
	<section class="p-5 solid mt-0" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-6">
					<h2>A Little About Me</h2>
					<p>In life I regularly find myself in pursuit of a greater challenge. I was raised with the belief that to say you can't would be admitting that you were incapable of learning. This instilled a persistent drive to accomplish better things. You should not be afraid to fail, but be afraid of not learning. These few little pieces of advice have led me to persue some incredible interests and hobbies. From blasting through the desert on my dirtbike to learning how to code and camping, snowboarding, and travel abroad inbetween, I feel like I have gained some invaluable experience</p>
					<p>I began my career life as an electrician. I built server rooms, access control systems, hospitals, schools, offices, and homes. I was taught a lot about what hard work was. I loved to troubleshoot, design, and create. This life required some major</p>
				</div>
				<div class="col-md-4 col-lg-6"><img src="./images/getting-ready.jpg"></div>
			</div>
		</div>
	</section>

	<!-- parallax second section -->
	<div class="parallax-content2">
		<div class="parallax">
			<div class="jumbotron bg-transparent float-left">
				<h1>Languages I have learned</h1>
			</div>
		</div>
	</div>

	<!-- Languages I know -->
	<section class="p-5 solid mt-0" id="languages">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lr-6">
					<h2>I operate on Linux!</h2>
					<p>I code with HTML, PHP, MySQL, Java Script JQUery, Bootstrap, Angular, AJAX, Json, CSS</p>
					<ul>
						<li>HTML</li>
						<li>PHP</li>
						<li>CSS</li>
						<li>MySQL</li>
						<li>Java Script</li>
						<li>jQuery</li>
						<li>Bootstrap</li>
						<li>Angular</li>
						<li>AJAX</li>
						<li>Json</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- parallax third section -->
	<div class="parallax-content3">
		<div class="parallax">
			<div class="jumbotron bg-transparent float-right">
				<h1>My Other Attributes</h1>
				<p>Soft skills gathered over time</p>
			</div>
		</div>
	</div>

	<section class="p-5 solid mt-0" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lr-6">
					<h2>Skills</h2>
					<p>Slacking, Sleeping, eating, bbbrrrraaaaappppppp</p>
				</div>
			</div>
		</div>
	</section>

	<!-- parallax fourth section -->
	<div class="parallax-content4">
		<div class="parallax">
			<div class="jumbotron bg-transparent text-center">
				<h1>What can I do for you?</h1>
				<p>I'd love to see what we could accomplish together.</p>
			</div>
		</div>
	</div>

	<section class="p-5 solid mt-0" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lr-6">
					<h2>contact</h2>
					<form>

						<label>Name</label>
						<input name="name" placeholder="Type Here">

						<label>Email</label>
						<input name="email" type="email" placeholder="Type Here">

						<label>Message</label>
						<textarea name="message" placeholder="Type Here"></textarea>

						<input id="submit" name="submit" type="submit" value="Submit">

					</form>

				</div>
			</div>
		</div>
	</section>
</body>
