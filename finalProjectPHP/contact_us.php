<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>E-Store |s Electronic Goods Dealers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style type="text/css"></style>
</head>

<body style="font-family: Montserrat">
	<?php
	if (!isset($_SESSION['id'])) {
		require 'header_logged_out.php';
	?>



		<!-- 1 PANEL FOR LOGGED IN USERS-->
		<div class="row">
		<div class="container" style="margin-top: 80px; padding: 20px; border: 3px solid #bbb ">
			<div class="row-style-login-page-pannel">
				<div class="col-sm-9 col-xs-12">
					<h2>LIVE SUPPORT</h2>
					<h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variants of passaages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				</div>
				<div class="col-sm-3 col-xs-12">
					<!-- contact us pic-->
					<img src="images\livesupport.png">

				</div>

			</div>
		</div>
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
			$to = 'bellKevin@pm.me, kevinbellr@gmail.com';
			mail($to, 'Contact Form Submission', $body, "From: {$_POST['email']}");

			// Print a message:
			echo '<p><em>Thank you for contacting me. I will reply some day.</em></p>';

			// Clear $_POST (so that the form's not sticky):
			$_POST = [];
		} else {
			echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
		}
	} // End of main isset() IF.

	// Create the HTML form:
	?>



	<div class="row">
		<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
			<div class="row-style-login-page-pannel">
				<div class="col-sm-6 col-xs-12">
					<h3>CONTACT US</h3>
					<form action="email.php" method="post">
						<p>Full Name: <input type="text" name="name" size="30" maxlength="60" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"></p>
						<p>Email Address: <input type="email" name="email" size="30" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></p>
						<p>Comments: <textarea name="comments" rows="5" cols="30"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea></p>
						<p><input type="submit" name="submit" value="Send!"></p>
					</form>

				</div>
				<div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc">
					<h3>Company Information:</h3>
					<p>500, Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone: 801-555-1234<br>Fax: 801-556-1234<br>Email: bellKevin@pm.me<br>Follow on: Facebook, Twitter<br></p>
				</div>

			</div>
		</div>
	</div>





	<div style="background-color: #333; color:white ;">
		<?php require 'foot.php' ?>
	</div>
		<!-- 1 PANEL ENDS-->

		



	<?php } else {
		require 'header_logged_in.php';
	?>

		<div class="container" style="margin-top: 60px;">
			<b>
				<?php
				echo "Hi " . $_SESSION['name'];
				?>
			</b>
		</div>

		<!-- 2 PANEL begins-->
		<div class="row">
		<div class="container" style="margin-top: 80px; padding: 20px; border: 3px solid #bbb ">
			<div class="row-style-login-page-pannel">
				<div class="col-sm-9 col-xs-12">
					<h2>LIVE SUPPORT</h2>
					<h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variants of passaages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				</div>
				<div class="col-sm-3 col-xs-12">
					<!-- contact us pic-->
					<img src="images\livesupport.png">

				</div>

			</div>
		</div>
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
			$to = 'bellKevin@pm.me, kevinbellr@gmail.com';
			mail($to, 'Contact Form Submission', $body, "From: {$_POST['email']}");

			// Print a message:
			echo '<p><em>Thank you for contacting me. I will reply some day.</em></p>';

			// Clear $_POST (so that the form's not sticky):
			$_POST = [];
		} else {
			echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
		}
	} // End of main isset() IF.

	// Create the HTML form:
	?>



	<div class="row">
		<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
			<div class="row-style-login-page-pannel">
				<div class="col-sm-6 col-xs-12">
					<h3>CONTACT US</h3>
					<form action="email.php" method="post">
						<p>Full Name: <input type="text" name="name" size="30" maxlength="60" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"></p>
						<p>Email Address: <input type="email" name="email" size="30" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></p>
						<p>Comments: <textarea name="comments" rows="5" cols="30"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea></p>
						<p><input type="submit" name="submit" value="Send!"></p>
					</form>

				</div>
				<div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc">
					<h3>Company Information:</h3>
					<p>500, Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone: 801-555-1234<br>Fax: 801-556-1234<br>Email: bellKevin@pm.me<br>Follow on: Facebook, Twitter<br></p>
				</div>

			</div>
		</div>
	</div>





	<div style="background-color: #333; color:white ;">
		<?php require 'foot.php' ?>
	</div>


</body>

</html>

<?php } ?>