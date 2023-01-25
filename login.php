<?php
session_start();
?>

<?php
include_once 'header-signup.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<title>Document</title>
</head>
<body>
<section class="login-section">
	<form action="includes/login.inc.php" method="POST">
	  	<div class="login-form">
		  	<h1>Sign-in</h1>
			  <p class="des">To get started you need to create an account first, but if you
							already have an account then log in your existing account.</p>
			<div class="login-place">
			<p>Email*</p>
          	<input type="text" name="uid" placeholder="Username" />
			<p>Password*</p>
          	<input type="password" name="pwd" placeholder="Password" />
          	<input type="submit" name="login-submit" value="Login" class="login-button" />
			<p class="not-registered-yet">Don't have an account?</p> <a href="signup.php">Create an account</a>
    	</div>
      <?php

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, 'emptyinput') == true) {
  echo "<p class='error'>You did not fill in all fields</p>";
  exit();
} elseif (strpos($fullUrl, 'wrongpassword') == true) {
  echo "<p class='error'>You have entered wrong password</p>";
  exit();
}
?>
</body>
</html>