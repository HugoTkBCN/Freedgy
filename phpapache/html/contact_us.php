<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<?php
if (function_exists('mail')) {
	echo 'mail() is available';
} else {
	echo 'mail() has been disabled';
}
?>
<?php/*
	if (isset($_POST['submit'])) {

		$to = "contact@freedgy.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$name = $_POST['name'];
		$subject = "Form submission";
		$subject2 = "Copy of your form submission";
		$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
		$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		$sendMail = mail($to, $subject, $message, $headers);
		if ($sendMail) {
			echo "Email Sent Successfully\n";
		} else {
			echo "Mail Failed\n";
		}
		$sendMail = mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
		if ($sendMail) {
			echo "Email Sent Successfully\n";
		} else {
			echo "Mail Failed\n";
		}
		echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
	}
	*/?>

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

<!DOCTYPE html>

<head>
	<title>Form submission</title>
</head>

<body>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
	<script type="text/javascript">
		(function() {
			// https://dashboard.emailjs.com/admin/integration
			emailjs.init('user_2StMasAbAPzMasQrAyivL');
		})();
	</script>
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('contact-form').addEventListener('submit', function(event) {
				event.preventDefault();
				// generate a five digit number for the contact_number variable
				this.contact_number.value = Math.random() * 100000 | 0;
				// these IDs from the previous steps
				emailjs.sendForm('contact_service', 'contact_form', this);
			});
		}
	</script>
	<form id="contact-form">
		<input type="hidden" name="contact_number">
		<label>Name</label>
		<input type="text" name="user_name">
		<label>Email</label>
		<input type="email" name="user_email">
		<label>Message</label>
		<textarea name="message"></textarea>
		<input type="submit" value="Send">
	</form>

</body>

</html>