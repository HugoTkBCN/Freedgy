<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Freedgy</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/ico" href="assets/logo.png" />
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="subpage">

	<!-- Header -->
	<header id="header">
		<nav class="left">
			<a href="#menu"><span>Menu</span></a>
		</nav>
		<a href="index.php"><img id="logo" src="assets/logo.png"></img></a>
	</header>

	<!-- Menu -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.php">Home</a></li>
			<li><a href="contact_us.php">Contact us</a></li>
			<li class="icons"><a href="#" class="icon fa-instagram"><span class="label">Instagram</span> Instagram</a></li>
			<li class="icons"><a href="https://www.linkedin.com/company/freedgy/" class="icon fa-linkedin"><span class="label">Linkedin</span> Linkedin</a></li>
			<li class="icons"><a href="https://medium.com/@freedgy.project/freedgy-food-waste-and-food-precariousness-students-meet-the-challenge-1ee88a3f821e" class="icon fa-medium"><span class="label">Medium</span> Medium</a></li>
		</ul>
	</nav>

	<?php
	if (isset($_POST['submit']) && isset($_POST['human'])) {
		$to = "contact@freedgy.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$name = $_POST['name'];
		$subject = "Form submission";
		$subject2 = "Copy of your form submission";
		$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
		$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		if (mail($to, $subject, $message, $headers)) {
			echo "True";
		} else {
			echo "False";
		}
		mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
		echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	} elseif (isset($_POST['submit'])) {
		echo "check that you are not a robot";
	}
	?>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<h1>Contact us</h1>

			<form method="post" action="">
				<div class="row uniform">
					<div class="6u 12u$(xsmall)">
						<input type="text" name="name" id="name" value="" placeholder="Name" />
					</div>
					<div class="6u$ 12u$(xsmall)">
						<input type="email" name="email" id="email" value="" placeholder="Email" />
					</div>
					<!-- Break -->
					<div class="12u$">
						<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
					</div>
					<!-- Break -->
					<div class="6u$ 12u$(small)">
						<input type="checkbox" id="human" name="human">
						<label for="human">I am not a robot</label>
					</div>
					<!-- Break -->
					<div class="12u$">
						<ul class="actions">
							<li><input type="submit" value="Submit" name="submit" /></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<h2>Contact us</h2>
			<ul class="actions">
				<li><span class="icon fa-phone"></span> +34 620 397 972</li>
				<li><span class="icon fa-envelope"></span> <a href="contact_us.php">freedgy.project@gmail.com</a></li>
				<li><span class="icon fa-map-marker"></span> <a href="https://goo.gl/maps/pd2bjZ2Q7GTqzHq47">Carrer de Joan Miró, 21, 08005 Barcelona, Spain</a></li>
			</ul>
			<ul class="icons">
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li>
					<<!-- Menu -->
						<nav id="menu">
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="contact_us.php">Contact us</a></li>
								<li class="icons"><a href="#" class="icon fa-instagram"><span class="label">Instagram</span> Instagram</a></li>
								<li class="icons"><a href="https://www.linkedin.com/company/freedgy/" class="icon fa-linkedin"><span class="label">Linkedin</span> Linkedin</a></li>
								<li class="icons"><a href="https://medium.com/@freedgy.project/freedgy-food-waste-and-food-precariousness-students-meet-the-challenge-1ee88a3f821e" class="icon fa-medium"><span class="label">Medium</span> Medium</a></li>
							</ul>
						</nav>2020.
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>