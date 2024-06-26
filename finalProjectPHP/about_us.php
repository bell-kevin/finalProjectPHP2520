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
		<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
			<div class="row-style-login-page-pannel">
				<div class=" col-md-4 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>WHO WE ARE</h4>
						</div>
						<div class="panel-body">
							<!--put mobile pic. -->
							<img src="images\call1.jpg"><br><br>
							<p>E-store is a USA electronics commerce company with headquaters in Kaysville, Utah. It is the largest internet-based retailer in the USA. E-store started as an online blog, but soon diversified, selling mobile phones. E-store also sells certain low-end products like USB cables and other accessories. The E-store has a separate retail website for different regions of the country, and we also ship our products to different countries. Amazon charges international charges for certain products when delivering internationally, but we provide products free of delivery charge across the globe without a single penny. We also have branches in many countries and we allow product to be returned within 30 days. We deal with the best manufactures, so we provide quality products to our customers.</p>
						</div>
					</div>
				</div>
				<div class=" col-md-4 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>OUR HISTORY</h4>
						</div>
						<div class="panel-body">
							<a href="#">-1997-</a>
							<p>Our company was founded by Kevin Bell (inventor, innovator and entrepreneur) in 1997, credited with developing the predecessor to online shopping. The idea came about during a stroll with his wife and Labrador when he lamented about their weekly supermarket shopping expedition. This conversation sparked an idea to hook a television to their supermarket to deliver the groceries. Immediately after the discussion he quickly planned and implemented his idea.</p>

							<a href="#">-2002-</a>
							<p>In the late 2002, E-store was started to become popular. People began to shop online and in the same year E-store expanded its limits and switched to a fully electronic product based firm.</p>

							<a href="#">-2010-</a>
							<p>The era of internet has begun and people started to depend more on internet than anything else and that brought to a golden opportunity to online stores. E-store bacame the second major online ecommerce store and was awarded by many highly reputed magazines.</p>

							<a href="#">-2017-</a>
							<p>Now, E-store has became the world wide best #1 ecommerce site and is mostly trusted by commom man, as we provide best products at the lowest cost possible. E-store will always be there for it's customers.</p>
						</div>
					</div>
				</div>
				<div class=" col-md-4 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>OPPORTUNITIES</h4>
						</div>
						<div class="panel-body">
							<!--put mobile phone pics and its specifications in this box in all pannels. -->
							<h4>Available Roles:</h4>
							<ol>
								<li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 month internship]</li><br>
								<li>Business Apprentice [6 month internship]</li><br>
								<li>Manager at back-end operations [Full Time Role + also available as a 6 month internship]</li>
							</ol>
						</div>
					</div>
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
		<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
			<div class="row-style-login-page-pannel">
				<div class=" col-md-4 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>WHO WE ARE</h4>
						</div>
						<div class="panel-body">
							<!--put mobile pic. -->
							<img src="images\call1.jpg"><br><br>
							<p>E-store is a USA electronics commerce company with headquaters in Kaysville, Utah. It is the largest internet-based retailer in the USA. E-store started as an online blog, but soon diversified, selling mobile phones. E-store also sells certain low-end products like USB cables and other accessories. The E-store has a separate retail website for different regions of the country, and we also ship our products to different countries. Amazon charges international charges for certain products when delivering internationally, but we provide products free of delivery charges across the globe without a single penny. We also have branches in many countries and we provide facility of product to be returned in 30 days. We deal with the best manufactures so we provide quality products to our customers.</p>
						</div>
					</div>
				</div>
				<div class=" col-md-4 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>OUR HISTORY</h4>
						</div>
						<div class="panel-body">
							<a href="#">-1997-</a>
							<p>Our company was founded by Kevin Bell (inventor, innovator and entrepreneur) in 1997, credited with developing the predecessor to online shopping. The idea came about during a stroll with his wife and Labrador when he lamented about their weekly supermarket shopping expedition. This conversation sparked an idea to hook a television to their supermarket to deliver the groceries. Immediately after the discussion he quickly planned and implemented his idea.</p>

							<a href="#">-2002-</a>
							<p>In the late 2002, E-store was started to become popular. People began to shop online and in the same year E-store expanded its limits and switched to a fully electronic product based firm.</p>

							<a href="#">-2010-</a>
							<p>The era of internet has begun and people started to depend more on internet than anything else and that brought to a golden opportunity to online stores. E-store bacame the second major online ecommerce store and was awarded by many highly reputed magazines.</p>

							<a href="#">-2017-</a>
							<p>Now, E-store has became the world wide best #1 ecommerce site and is mostly trusted by commom man, as we provide best products at the lowest cost possible. E-store will always be there for it's customers.</p>
						</div>
					</div>
				</div>
				<div class=" col-md-4 col-sm-6 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>OPPORTUNITIES</h4>
						</div>
						<div class="panel-body">
							<!--put mobile phone pics and its specifications in this box in all pannels. -->
							<h4>Available Roles:</h4>
							<ol>
								<li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 month internship]</li><br>
								<li>Business Apprentice [6 month internship]</li><br>
								<li>Manager at back-end operations [Full Time Role + also available as a 6 month internship]</li>
							</ol>
						</div>
					</div>
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