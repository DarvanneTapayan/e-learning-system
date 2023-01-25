<?php
session_start();
$error_message = "";
if(isset($_SESSION['loggedin']))
{
    Header('Location: welcome.php');
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin')
    {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['username'];
        Header('Location: welcome.php');
    }
    else
    {
        $error_message = "User Not Found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/log-in.css" />
		<title>Basic Auth</title>
	</head>
	<body>
		<section class="log-in-section">
			<form action="php_includes/log-in.inc.php" method="post">
				<div class="log-in-form">
					<h1>Log-in</h1>
					<p class="des"
						>To get started you need to create an account first, but if you
						already have an account then log in your existing account.</p
					>
					<button>Sign-in with Google</button>
					<div class="log-in-place">
						<p>Email*</p>
						<input type="text" name="name" placeholder="Username/Email..." />
						<p>Password*</p>
						<input
							type="password"
							name="pwd"
							placeholder="Create password min.8 Character..." />
					</div>
					<button type="submit" name="submit" class="log-in-button"
						>Log in</button
					>
					<p class="not-registered-yet"
						>Not registered yet? <a href="sign-up.php">Create an account</a></p
					>
					<div>
						<span style="color: red"><?= $error_message; ?></span>
					</div>
				</div>
			</form>
		</section>
	</body>
</html>
