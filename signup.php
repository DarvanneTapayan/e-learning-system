<?php
	include_once 'header.php'
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
				<form action="php_includes/signup.inc.php" method="post">
					<div class="sign-up-form">
						<h1>Sign-up</h1>
						<p class="des">To get started you need to create an account first, but if you
							already have an account then log in your existing account.</p>
						<button>Sign up with Google</button>
						<div class="sign-up-place">
							<p>Email*</p>
							<input type="text" name="name" placeholder="Full name..." />
							<input type="email" name="email" placeholder="Email..." />
							<input type="text" name="uid" placeholder="Username..." />
							<p>Password*</p>
							<input
								type="password"
								name="pwd"
								placeholder="Create password min.8 Character..." />
							<input
								type="password"
								name="pwdrepeat"
								placeholder="Confirm password..." />
						</div>
						<button type="submit" name="submit" class="sign-up-button">Sign up</button>
						<p class="not-registered-yet">Already have an account? <a href="log-in.php">Log-in account</a></p>
					</div>
				</form>
			</section>
			<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<p>Fill in all fields!</p>";
					}
					elseif ($_GET["error"] == "invalidUid") {
						echo "<p>Choose a proper username!</p>";
					}
					elseif ($_GET["error"] == "invalidemail") {
						echo "<p>Choose a proper email!</p>";
					}
					elseif ($_GET["error"] == "passwordsdontmatch") {
						echo "<p>Passwords doesn't match!</p>";
					}

					elseif ($_GET["error"] == "stmtfailed") {
						echo "<p>Something went wrong!</p>";
					}
					elseif ($_GET["error"] == "usernametaken") {
						echo "<p>Username already taken!</p>";
					}
					elseif ($_GET["error"] == "none") {
						echo "<p>You have signed up!</p>";
					}
				}
			?>
<?php
	// include_once 'footer.php'
?>