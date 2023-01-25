<?php
	include_once 'header-login.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/signup.css">
	<title>Document</title>
</head>
<body>
<section class="sign-up-section">
    <form action="includes/signup.inc.php" method="POST">
	  	<div class="sign-up-form">
		  	<h1>Sign-up</h1>
			  <p class="des">To get started you need to create an account first, but if you
							already have an account then log in your existing account.</p>
			<div class="sign-up-place">
			<p>Email*</p>
          	<input type="text" name="first" placeholder="First name" />
          	<input type="text" name="last" placeholder="Last name" />
          	<input type="email" name="email" placeholder="Email address" />
          	<input type="text" name="uid" placeholder="Username" />
			<p>Password*</p>
          	<input type="password" name="pwd" placeholder="Password" />
          	<input type="submit" name="submit" value="Sign Up" class="sign-up-button" />
			<p class="not-registered-yet">Already have an account?</p> <a href="login.php">Log in account</a>
    	</div>
    <?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, 'emptyinput') == true) {
      echo "<p class='error'>You did not fill in all fields</p>";
      exit();
    } elseif (strpos($fullUrl, 'invalidemail') == true) {
      echo "<p class='error'>Your email is not valid</p>";
      exit();
    }
    ?>
  </div>
  </form>

  <?php
	// include_once 'footer.php'
?>