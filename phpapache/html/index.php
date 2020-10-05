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
	<div class="newletter_button">
		<a class="button" href="#newsletter">Join Our NewsLetter</a>
	</div>
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
	<section id="one" class="wrapper">
		<div class="inner flex flex-3">
			<p><span class="image left"><img src="images/supermarket.jpg" /></span>Every day, many people cannot afford to buy the food necessary to have a decent diet. Today in France, there are about 250,000 people without a stable home who have to live in shelters or on the street. Every day, millions of students skip meals as a solution to a bad financial situation. Every day, some families, especially large ones, struggle to nourish every member properly. Contradictorily, every day, on average, each supermarket in France throws away 20 kilograms of food. Isn’t that a big irony?</p>
		</div>
		<div class="inner flex flex-3">

			<div><span class="image right"><img src="assets/logo.png" /></span>
				<p>To help solve this huge issue, we want to create something that will help people in those precarious situations as well as reduce the food waste made by unsold supermarket products. And that is why we decided to create Freedgy.</p>
				<p>Freedgy is a non-profitable company that will spread a movement of solidarity. It is already starting to get popular in Europe and it consists in putting fridges in public areas, accessible by everyone: one can put food in the fridge as well as take food as need be.</p>
				<p>We want to digitize that movement by creating and distributing connected fridges. The fridges have a GPS inside, and are linked with our platform which allows users to make donations easily with our intuitive and simple interface. You have the possibility to help many people thanks to a few clicks and the power of generosity. Once your donation is registered in our database, we will send the request to the nearest supermarket in charge of the fridge you chose to donate to and they will take care of putting all your gifts in the fridge. You can also choose a specific supermarket which has a partnership with us and make a donation without selecting one of our Freedgies. That is helpful if a supermarket seems to have larger amounts of waste compared to other supermarkets. The supermarket will then deposit the food in the nearest Freedgy around them. Once your gift is delivered anyone who needs it may take it.
					We are looking forward to pushing that ambitious project to its full potential and hope we can all make a big change in the current food hunger and food waste situation. We hope you will follow us through that challenging and exciting journey.</p>
			</div>
		</div>
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