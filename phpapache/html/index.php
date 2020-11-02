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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
	<script type="text/javascript">
		(function() {
			// https://dashboard.emailjs.com/admin/integration
			emailjs.init('user_2StMasAbAPzMasQrAyivL');
		})();
	</script>
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('newsletter-form').addEventListener('submit', function(event) {
				event.preventDefault();
				if (document.getElementById("name").value.length > 0 && document.getElementById("email").value.length > 0) {
					// generate a five digit number for the contact_number variable
					this.contact_number.value = Math.random() * 100000 | 0;
					// these IDs from the previous steps
					emailjs.sendForm('Freedgy_Newsletter', 'template_uht7a3p', this);
					alert("You are now suscribed to our newsletter");
					this.reset();
				} else {
					alert("Please fill all the form !");
				}
			});
		}
	</script>
</head>

<body>
	<!-- Header -->
	<header id="header">
		<nav class="left">
			<a href="#menu"><span>Menu</span></a>
		</nav>
		<a href="index.php"><img id="logo" src="assets/logo.png"></img></a>
	</header>
	<div class="newletter_button">
		<a class="button" href="#newsletter">Join Our NewsLetter</a>
	</div>

	<!-- Menu -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.php">Home</a></li>
			<li><a href="contact_us.php">Contact us</a></li>
			<li class="icons"><a href="https://www.instagram.com/freedgy.project/" class="icon fa-instagram"><span class="label">Instagram</span> Instagram</a></li>
			<li class="icons"><a href="https://www.linkedin.com/company/freedgy/" class="icon fa-linkedin"><span class="label">Linkedin</span> Linkedin</a></li>
			<li class="icons"><a href="https://medium.com/@freedgy.project/freedgy-food-waste-and-food-precariousness-students-meet-the-challenge-1ee88a3f821e" class="icon fa-medium"><span class="label">Medium</span> Medium</a></li>
		</ul>
	</nav>

	<!-- Banner -->
	<section id="banner">
		<div class="content">
			<h1>Welcome to Freedgy</h1>
			<ul class="actions">
				<li><a href="#one" class="button scrolly">Lets go</a></li>
			</ul>
		</div>
	</section>
	<div id="newsletter" class="overlay">
		<div class="popup">
			<h2>Join our newsletter</h2>
			<a class="close" href="?home=1">&times;</a>
			<div class="content">
				<form id="newsletter-form">
					<input type="hidden" name="contact_number">
					<div id="name_newsletter" class="6u$ 12u$(xsmall)">
						<input type="text" name="user_name" id="name" value="" placeholder="Name" />
					</div>
					<div id="email_newsletter" class="6u$ 12u$(xsmall)">
						<input type="email" name="user_email" id="email" value="" placeholder="Email" />
					</div>
					<!-- Break -->
					<div id="join" class="12u$">
						<ul class="actions">
							<li><input type="submit" value="Join" name="submit" /></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- One -->
	<section id="one" class="trailer">
		<iframe id="ytplayer" type="text/html" width="960" height="540"
  		src="http://www.youtube.com/embed/Q8gARryJA9g?autoplay=1">
		</iframe>
	</section>

	<!-- Two -->
	<section id="two" class="wrapper style1 special">
		<div class="inner">
			<h2>Who are we?</h2>
			<figure>
				<blockquote>
					Freedgy is a non profitable enterprise run by 5 Epitech students from Barcelona and Berlin that will spread a movement of solidarity.
				</blockquote>
			</figure>
		</div>
	</section>

	<!-- Three -->
	<section id="three" class="wrapper">
		<div class="inner flex flex-3">
			<div class="flex-item box">
				<div class="image fit">
					<img class="profile_picture" src="images/hugo.jpg" alt="" />
				</div>
				<div class="content">
					<h3>Hugo Lachkar</h3>
					<p>Epitech Student in Barcelona</p>
				</div>
			</div>
			<div class="flex-item box">
				<div class="image fit">
					<img class="profile_picture" src="images/corentin" alt="" />
				</div>
				<div class="content">
					<h3>Corentin Rozet</h3>
					<p>Epitech Student in Barcelona</p>
				</div>
			</div>
			<div class="flex-item box">
				<div class="image fit">
					<img class="profile_picture" src="images/maxence" alt="" />
				</div>
				<div class="content">
					<h3>Maxence Desrousseaux</h3>
					<p>Epitech Student in Barcelona</p>
				</div>
			</div>
			<div class="flex-item box">
				<div class="image fit">
					<img class="profile_picture" src="images/noe" alt="" />
				</div>
				<div class="content">
					<h3>Noé Séchet</h3>
					<p>Epitech Student in Berlin</p>
				</div>
			</div>
			<div class="flex-item box">
				<div class="image fit">
					<img class="profile_picture" src="images/arnaud.jpg" alt="" />
				</div>
				<div class="content">
					<h3>Arnaud Roncari</h3>
					<p>Epitech Student in Berlin</p>
				</div>
			</div>
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
				<li><a href="https://www.instagram.com/freedgy.project/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="https://www.linkedin.com/company/freedgy/" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
				<li><a href="https://medium.com/@freedgy.project/freedgy-food-waste-and-food-precariousness-students-meet-the-challenge-1ee88a3f821e" class="icon fa-medium"><span class="label">Medium</span></a></li>
			</ul>
		</div>
		<div class="copyright">
			&copy; 2020.
		</div>
	</footer>

	<!-- Scriptshtml-->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.scrolly.min.js"></script>
	<script type="text/javascript" src="assets/js/skel.min.js"></script>
	<script type="text/javascript" src="assets/js/util.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript">
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		const home = urlParams.get('home');
		if (home != 1) {
			document.getElementById("newsletter").style.visibility = "visible";
			document.getElementById("newsletter").style.opacity = "1";
		}
	</script>
</body>

</html>