<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/header.css">

</head>

<body>

<header class="header">
        <div class="logo">Group #2</div>
        <nav class="nav-link">
            <ul>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    <a href="#">Team</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li class="sign-in">
                    <a href="signup.php">Sign-up</a>
                </li>
                <?php
                if (isset($_SESSION['useruid'])) {
                    echo '<li><a href="profile.php">Profile page</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Log Out</a></li>';
                }
                // else {
                //     echo '<li><a href="signup.php">Sign Up</a></li>';
                //     echo '<li><a href="login.php">Log in</a></li>';
                // }
                ?>
            </ul>
        </nav>
   </header>