<?php

global $connection;
include_once("DbConn.php");
	session_start();
	if(isset($_POST['update']))
	{
		$id=$_POST['ID'];
		$who=$_POST['who'];
		$images=$_POST['images'];
		$what=$_POST['what'];
		// $user_id=$_SESSION['ID'];

		if (empty($who)||empty($images)||empty($what)) {
			echo "Please fill your data carefully";
		}else
		{
			$sql="UPDATE about_us SET who_are_we=:who, img_path=:images, what_we_offer=:what WHERE id=$id";
			$update=$connection->prepare($sql);
			$update->bindParam(":who",$who);
			$update->bindParam(":images",$images);
			$update->bindParam(":what",$what);
			

			$update->execute();

			header("Location: about.php");
		}
	}

?>