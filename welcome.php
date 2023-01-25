<?php
session_start();

if(!isset($_SESSION['loggedin']))
{
    Header('Location: index.php');
}

?>

<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <meta http-equiv="refresh" content="5;url=log-out.php" /> -->
		<link rel="stylesheet" href="css/styles.css" />
		<title>Landing Page</title>
		<title>Basic Auth</title>
	</head>
	<body>

	<section class="introduction">
			<div class="intro-text">
				<h1>E-learning Management System / Group-B</h1>
				<p
					>"Welcome to our E-learning Management platform, where we strive to
					provide top-notch online education and training programs. Our system
					allows for easy creation and delivery of course content, student
					registration and tracking, and communication between students and
					instructors. Join us and experience the convenience and flexibility of
					e-learning."</p
				>
				<span>Get Started</span>
			</div>
			<div class="hero-banner-img">
				<img src="img/hero-supporting-img" alt="" />
			</div>
		</section>
		<section class="who-are-we">
			<div class="hero-banner-2">
				<img src="img/about-us-supporting-img" alt="" />
			</div>
			<div class="who-are-we-text">
				<h6>WHO ARE WE</h6>
				<h4>Information Technology - Group B</h4>
				<p
					>"Information Technology-5 Group B is a leading provider of e-learning
					management solutions. We understand the importance of education and
					training in today's fast-paced and ever-changing world, and we are
					committed to providing the tools and resources necessary for
					individuals and organizations to succeed. Our e-learning management
					system is designed to make the process of creating, delivering, and
					managing online education and training programs as easy and efficient
					as possible. Our platform includes a wide range of features,
					including: Course creation tools that allow for the quick and easy
					development of engaging and interactive course content Student
					registration and enrollment management tools to streamline the process
					of adding and tracking students Communication and collaboration tools
					that enable students and instructors to communicate and work together
					in real-time Assessment and evaluation tools that provide detailed
					insights into student performance and progress Reporting and analytics
					tools that allow for easy tracking of student progress and achievement
					We are constantly updating our platform to ensure that it stays
					up-to-date with the latest trends and best practices in e-learning.
					Our team of experienced professionals is dedicated to providing the
					highest level of support and service to our customers. In addition to
					our e-learning management system, we also offer a wide range of other
					IT services, including web development, software development, and
					consulting services. We believe that education and training are key to
					unlocking the full potential of individuals and organizations, and we
					are committed to helping you achieve your goals. Whether you are an
					individual looking to improve your skills or a business looking to
					train your employees, we have the tools and resources you need to
					succeed. Join us today and experience the convenience and flexibility
					of e-learning."</p
				>
			</div>
		</section>
		<h1>Welcome!<?= $_SESSION['username']; ?></h1>
		<a href="./log-out.php">Logout</a>
	</body>
</html>

<?php
include_once 'footer.php';
?>
