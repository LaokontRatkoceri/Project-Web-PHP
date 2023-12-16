<?php

global $connection;
include_once("DbConn.php");
	session_start();
	 // if (empty($_SESSION['ID'])) {
  //   header('Location:login.php');
  // }

	if(isset($_POST['submit']))
	{
		$service_name=$_POST['service_name'];
		$service_price=$_POST['price'];
		$service_description=$_POST['description'];
		$img=$_POST['img'];
		$userID=$_SESSION['ID']; 

		if(empty($service_name)||empty($service_description)||empty($img)||empty($service_price))
		{
			header("Location:insertservice.php");
		}
		else
		{
			
				$sql="INSERT INTO services(service_name,  service_price, service_description, service_img_path, user_id) VALUES(:service_name, :service_price, :service_description, :img, :userID)";
				$insertSql=$connection->prepare($sql);
				$insertSql->bindParam(":service_name",$service_name);
				$insertSql->bindParam(":service_price",$service_price);
				$insertSql->bindParam(":service_description",$service_description);
				$insertSql->bindParam(":img",$img);
				$insertSql->bindParam(":userID",$userID);


				$insertSql->execute();
			header('Location:services.php');

		}
	}

?>