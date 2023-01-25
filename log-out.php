<?php
session_start();

// Unset the session
session_unset();

// Destroy the session
session_destroy();

Header('Location: index.php');