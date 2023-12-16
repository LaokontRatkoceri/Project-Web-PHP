<?php
	include_once('DbConn.php');
	session_start();

	session_destroy();

	header('Location:login.php')
?>