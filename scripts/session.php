<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])  ) {
		header('location: ./LOGIN/account-type.php');
    }

    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ./LOGIN/logout-user.php");
	}
}
?>