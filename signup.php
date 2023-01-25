<?php
// include_once 'header-signin.php';
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
</body>
</html>
<section class="sign-up-section">
    <form action="includes/signup.inc.php" method="post">
	  	<div class="sign-up-form">
		  	    <h1>Sign-up</h1>
			      <p class="des">To get started you need to create an account first, but if you
							already have an account then log in your existing account.</p>
			<div class="sign-up-place">
			        <p>Email*</p>
          	        <input type="text" name="name" placeholder="Full name..." />
          	        <input type="email" name="email" placeholder="Email address..." />
          	        <input type="text" name="uid" placeholder="Username..." />
			        <p>Password*</p>
          	        <input type="password" name="pwd" placeholder="Password..." />
                    <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                    <button type="submit" name="submit">Sign up</button>
                    <span style="color: red;"><?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 'emptyinput') {
                                echo '<p>Fill in all fields!</p>';
                            } else if ($_GET['error'] == "invalidbuild") {
                                echo "<p>Choose a proper username!</p>";
                            } else if ($_GET['error'] == "invalidemail") {
                                echo "<p>Choose a proper email!</p>";
                            } else if ($_GET['error'] == "passwordsnotmatch") {
                                echo "<p>Passwords doesn't match!</p>";
                            } else if ($_GET['error'] == "stmtfailed") {
                                echo "<p>Something went wrong, try again!</p>";
                            } else if ($_GET['error'] == "usernametaken") {
                                echo "<p>Username already taken!</p>";
                            } else if ($_GET['error'] == "none") {
                                echo "<p>You have signed up!</p>";
                            }
                        }
                    ?></span>
                    <!-- <input type="submit" name="submit" value="Sign Up"/> -->
			        <p class="not-registered-yet">Already have an existing account?<a href="log-in.php"> Log in account.</a></p>
            </div>
    	</div>
    </form>
</section>
<?php
include_once 'footer.php';
?>
