<?php

	include_once("DbConn.php");

	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$temppassword=$_POST['pass'];
		$confirmPass=$_POST['confirmPass'];
		$email=$_POST['email'];
		$password=password_hash($temppassword, PASSWORD_DEFAULT); //me kon pass i perkohshem puna qe me u enkriptu ne databaze
		$userRoleId=$_POST['user_role']; //user role percakton a o admin a user i thjesht =2

		if(empty($username)||empty($password)||empty($confirmPass)||empty($email))
		{
			header("Location:signup.php");
		}
		else
		{
			if($temppassword==$confirmPass)
			{ // vlerat duhet me u vendos ne propercion me kolonat psh user, pass etj
				$sql="INSERT INTO users(username, password, email, users_role_id) VALUES(:username, :password, :email, :usersRoleId)";
				$insertSql=$connection->prepare($sql);
				$insertSql->bindParam(":username",$username);
				$insertSql->bindParam(":password",$password);
				$insertSql->bindParam(":email",$email);
				$insertSql->bindParam(":usersRoleId",$userRoleId);


				$insertSql->execute();
				header("Location:login.php");  // mos me met register blank me t qu te login
			}
			else
			{
				echo "Password doesn't match";
			}

		}
	}

?>