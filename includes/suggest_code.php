<!--contact form was found at https://bootstrapbay.com/blog/working-bootstrap-contact-form/-->
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form';
		$to = 'cafesuggestions@gourmetcoffee.london';
		$subject = 'Suggest Cafe';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your maths is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="uk-text-success uk-text-bold">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="uk-text-danger uk-text-bold">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
