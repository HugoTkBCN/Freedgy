<!DOCTYPE html>

<head>
    <title>Form submission</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
    <script>
        $(document).ready(function() {
            $('#contact-form').submit(function(e) {
                const form = document.querySelector('form[id = "contact - form"]');
                const username = form.elements['user_name'].value;
                const userMail = form.elements['user_email'].value;
                const subject = form.elements['subject'].value;
                const message = "email—" + userMail + ' < br > ' + "Summary: " + form.elements['message'].value;
                e.preventDefault();
                var data = {
                    service_id: 'gmail',
                    template_id: 'template_uffuhuf',
                    user_id: 'user_2StMasAbAPzMasQrAyivL',
                    template_params: {
                        from_name: username,
                        to_name: 'Freedgy',
                        subject: subject,
                        message_html: message
                    }
                };
                $.ajax('https: //api.emailjs.com/api/v1.0/email/send', {
                    type: 'POST',
                    data: JSON.stringify(data),
                    contentType: 'application / json'
                }).done(function() {
                    alert('Your mail is sent!');
                }).fail(function(error) {
                    alert('Oops…' + JSON.stringify(error));
                })
            })
        })
    </script>
</head>

<body>
    <form id="contact-form">
        <input type="hidden" name="contact_number">
        <label>Name</label>
        <input type="text" name="user_name" id="user_name">
        <label>Email</label>
        <input type="email" name="user_email" id="user_email">
        <br>
        <label>Subject</label>
        <input type="text" name="subject" id="subject">
        <label>Message</label>
        <textarea name="message" id="message"></textarea>
        <input type="submit" value="Send">
    </form>

</body>

</html>