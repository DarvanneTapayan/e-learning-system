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
		<title>Basic Auth</title>
	</head>

	<body>
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" />
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" />
			</div>
			<div>
				<input type="submit" value="Login" name="submit" />
			</div>
			<div>
				<span style="color: red"><?= $error_message; ?></span>
			</div>
		</form>
	</body>
</html>
