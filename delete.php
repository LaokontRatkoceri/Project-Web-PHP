<?php
	 // if (empty($_SESSION['ID'])) {
  //   header('Location:login.php');
  // }
global $connection;
include_once("DbConn.php");
	$id=$_GET['ID'];
	$sql="DELETE FROM users WHERE ID=:id";
    $connect = $connection;
    $deleteUsers=$connect->prepare($sql);
	$deleteUsers->bindParam(":id",$id);
	$deleteUsers->execute();

	header('Location:dashboard.php');



?>