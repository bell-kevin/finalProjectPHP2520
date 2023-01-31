<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Contact Me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style type="text/css">


	</style>
</head>

<body>

	<?php
	require 'header_logged_out.php';
	?>
	<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	</div>
	<?php

	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Minimal form validation:
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments'])) {

			// Create the body:
			$body = "Name: {$_POST['name']}\n\nEmail: {$_POST['email']}\n\nComments: {$_POST['comments']}";

			// Make it no longer than 70 characters long:
			$body = wordwrap($body, 70);

			// Send the email:
			//the email address is the one you want to send the email to
			//so bellKevin@pm.me can be changed to whoever you want to send the email to like kevinbellr@gmail.com or george.ray@davistech.edu
			//the subject is the subject line of the email, so Contact Form Submission can be changed to whatever you want
			$to = 'bellKevin@pm.me';
			mail($to, 'Contact Form Submission', $body, "From: {$_POST['email']}");

			// Print a message:
			echo '<h1><center>Thank you for contacting me. I will reply some day.</center></h1>';
			for($i=0; $i<5; $i++) {
				echo '<br>';
			}

			// Clear $_POST (so that the form's not sticky):
			$_POST = [];
		} else {
			echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
		}
	} // End of main isset() IF.

	// Create the HTML form:
	?>
	<div style="background-color: #333; color:white ;">
		<?php require 'foot.php' ?>
	</div>
</body>

</html>