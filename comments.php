<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Remodeling in Tully NY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="construction, remodeling, home, repair, home repair, tully, tully new york, new york">
	<meta name="author" content="Ryan Rich">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/docs.css" rel="stylesheet">
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
	<div class="container">
		<div class="logo">
			<img src="assets/img/logo.png"></div>
			  <a href="tests.html" class="btn btn-info pull-left up">View Our Testimonials!</a>
		<div class="alert alert-danger header pull-center">"Serving the greater Tully New York area for over 20 years"</div>
		<!-- -->
	</div>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="services.html">Services Offered</a>
						</li>
						<li>
							<a href="estimate.html">Request Estimate</a>
						</li>
						<li>
							<a href="work.html">View Our Work</a>
						</li>
					</ul>
					<ul class="navOne pull-right">
						<li>
							<a href="feedback.html" class="btn">Give Us Feedback</a>
						</li>
						<li>
							<a href="#" class="btn btn-warning">Call Us Now! 315-427-3440</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- -->

		<div class="container">
			<div class="estimate">
				<div class="whiteT">

					<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "rrichrs@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for sending us feedback. Your comments are pending approval and should appear on the website within 24 hours" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'>Return Home</a>
				";
?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="container">
		<div class="footer">
			<p class="whiteT">
				Copyright 2012 D. Featherstone Construction
				<span class="pull-right">Tully NY | 315-427-3440</span>
			</p>
			<p class="whiteT">
				<img src="assets/img/epa.png"></p>
		</div>
		  <a href="http://ryanSrich.com" target="_blank" class="btn under">Web Design | Development by Ryan Rich</a>
	</div>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/google-code-prettify/prettify.js"></script>
	<script src="assets/js/bootstrap-transition.js"></script>
	<script src="assets/js/bootstrap-alert.js"></script>
	<script src="assets/js/bootstrap-modal.js"></script>
	<script src="assets/js/bootstrap-dropdown.js"></script>
	<script src="assets/js/bootstrap-scrollspy.js"></script>
	<script src="assets/js/bootstrap-tab.js"></script>
	<script src="assets/js/bootstrap-tooltip.js"></script>
	<script src="assets/js/bootstrap-popover.js"></script>
	<script src="assets/js/bootstrap-button.js"></script>
	<script src="assets/js/bootstrap-collapse.js"></script>
	<script src="assets/js/bootstrap-carousel.js"></script>
	<script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="assets/js/application.js"></script>

</body>
</html>