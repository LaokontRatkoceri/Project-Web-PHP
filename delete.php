<?php
	 // if (empty($_SESSION['ID'])) {
  //   header('Location:login.php');
  // }

	include_once("DbConn.php");
	$id=$_GET['ID'];
	$sql="DELETE FROM users WHERE ID=:id";
	$deleteUsers=$connect->prepare($sql);
	$deleteUsers->bindParam(":id",$id);
	$deleteUsers->execute();

	header('Location:dashboard.php');


?>