<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="css/sign-up.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
			rel="stylesheet" />
	</head>
	<body>
		<main>
			<section class="sign-up-section">
				<form action="php_includes/sign-up.inc.php" method="post">
					<div class="sign-up-form">
						<h1>Sign-up</h1>
						<p class="des"
							>To get started you need to create an account first, but if you
							already have an account then log in your existing account.</p
						>
						<button>Sign up with Google</button>
						<div class="sign-up-place">
							<p>Email*</p>
							<input type="text" name="name" placeholder="Full name..." />
							<input type="text" name="email" placeholder="Email..." />
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
		</main>
	</body>
</html>
						<!-- <div class="sign-up-two">
						<p>Remember me</p>
						<p class="password">Forget password?</p>
					</div> -->