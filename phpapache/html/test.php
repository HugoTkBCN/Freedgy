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