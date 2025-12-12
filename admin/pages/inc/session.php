<?php
session_start();
if ($_SESSION['admin_loggedin']!=TRUE) {
	header('Location: ./index.php');
	exit;
}
$username = $_SESSION['username'];
?>
