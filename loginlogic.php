<?php
global $connection;
require"DbConn.php"; //dallimi ne mes require and inclde - search

	session_start();

	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=$_POST['pass'];

		if(empty($username)||empty($password))
		{
			header('Location:login.php');
		}
		else
		{
			$sql="SELECT * from users WHERE username=:username";
			$login=$connection->prepare($sql);
			$login->bindParam(":username",$username);
			$login->execute();

			$data=$login->fetch();

			if($data==false)
			{
				echo "Username was not found";
			}
			else
			{
				if(password_verify($password, $data['password']))
				{
					$_SESSION['username']=$data['username'];
					$_SESSION['ID']=$data['ID'];
					$_SESSION['roleID']=$data['users_role_id'];


					header("Location:index.php");
				}	
				else
				{
					echo "Password doesn't match";
				}
			}
		}
	}


?>