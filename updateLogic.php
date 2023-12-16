<?php
	
	include_once("DbConn.php");
	session_start();
	if(isset($_POST['update']))
	{
		$id=$_POST['ID'];
		$name=$_POST['name'];
		$service_price=$_POST['price'];
		$service_description=$_POST['description'];
		$service_img_path=$_POST['images'];
		$user_id=$_SESSION['ID'];

		if (empty($name)||empty($service_price)||empty($service_description)||empty($service_img_path)) {
			echo "Please fill your data carefully";
		}else
		{
			$sql="UPDATE services SET service_name=:name, service_price=:service_price, service_description=:service_description, service_img_path=:service_img_path, user_id=:user_id WHERE id=$id";
			$update=$connection->prepare($sql);
			$update->bindParam(":name",$name);
			$update->bindParam(":service_price",$service_price);
			$update->bindParam(":service_description",$service_description);
			$update->bindParam(":service_img_path",$service_img_path);
			$update->bindParam(":user_id",$user_id);

			$update->execute();

			header("Location: services.php");
		}
	}

?>