<?php

 // if (empty($_SESSION['ID'])) {
 //    header('Location:login.php');
 //  }

global $connection;
include_once('dbconn.php');

	$id = $_GET['ID'];


	$sql = "SELECT * FROM users WHERE id=$id";

	$getUsers = $connection->prepare($sql);

	$getUsers->execute();

	$users = $getUsers->fetchAll();


?>



<!DOCTYPE html>
<html>
<head>
	
	<title>Update</title>
</head>
<body>
	
	<form action="updateuserslogic.php" method="POST">
		<input type="text" value="<?= $users[0]['ID'] ?>" name='ID' placeholder='ID' readonly>
		<input type="text" value="<?= $users[0]['username'] ?>" name="username" placeholder="User">
		<input type="text" value="<?= $users[0]['password'] ?>" name="password" placeholder="Password">
		<input type="text" value="<?= $users[0]['email'] ?>" name="email" placeholder="E-mail">
		<button type="submit" name="update">Update</button>

	</form>

</body>
</html>