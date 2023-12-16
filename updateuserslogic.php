<?php

global $connection;
include_once("dbconn.php");

		if(isset($_POST['update']))
		{
			$id=$_POST['ID'];
			$username=$_POST['username'];
			$temppassword=$_POST['password'];
			$email=$_POST['email'];
			$password=password_hash($temppassword, PASSWORD_DEFAULT);

			if (empty($username)||empty($password)||empty($email)) {

				echo "Mbushi te dhenat e kerkuara.";	
			}
			else
			{
				$sql="UPDATE users SET username=:username, password=:password, email=:email WHERE ID=:id";

				$sqlquery=$connection->prepare($sql);
				$sqlquery->bindParam(":username",$username);
				$sqlquery->bindParam(":password",$password);
				$sqlquery->bindParam(":email",$email);
				$sqlquery->bindParam(":id",$id);
				$sqlquery->execute();
				echo "Succes";
				header("Location:dashboard.php");
			}
		}

?>