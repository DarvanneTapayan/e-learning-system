<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/login.css"/>
		<title>Basic Auth</title>
	</head>
	<body>
		<section class="log-in-section">
			<form action="php_includes/login.inc.php" method="post">
				<div class="log-in-form">
					<h1>Log-in</h1>
					<p class="des"
						>To get started you need to create an account first, but if you
						already have an account then log in your existing account.</p>
					<button>Sign-in with Google</button>
					<div class="log-in-place">
						<p>Email*</p>
						<input type="text" name="name" placeholder="Username/Email..." />
						<p>Password*</p>
						<input
							type="password"
							name="pwd"
							placeholder="Password..." />
					</div>
					<button type="submit" name="submit" class="log-in-button">Log in</button>
					<div class="sign-up-two">
						<p>Remember me</p>
						<p class="password">Forget password?</p>
					</div>
					<p class="not-registered-yet">Not registered yet? <a href="sign-up.php">Create an account</a></p>
				</div>
			</form>
		</section>
	</body>
</html>
