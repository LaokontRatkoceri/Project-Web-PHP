global$connection;  <?php
	
	 session_start();
	// echo $_SESSION['username'];


?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BEJAuto | Dashboard</title>
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body><!-- HEADER -->
    <header id="main-header">
      <div class="container">
        <div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <h1><span class="primary-text">BEJ</span>Auto</h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                if(!empty($_SESSION['roleID'])){
                 if ($_SESSION['roleID']==1)
                
                {
                  ?>
                  <li class="current"><a href="dashboard.php">Dashboard</a></li>
                  
                <?php }} ?>
                <?php
                  if(empty($_SESSION['ID']))
                  {
                    ?>
                <li><a href="login.php">Login</a></li>
                <?php
                  }else
                  {

                  ?>
                  <li><a href="logout.php">Logout <?= $_SESSION['username']?></a></li>
                  <?php
                  }
                ?>
               
                
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div style="display:flex; justify-content: center;"><h3 style="color: white;">Attention: Admin users have role ID =1, regular users have role ID =2</h3></div>
    	<?php

		include_once("DbConn.php");
		$sql="SELECT * From users";
		$getUsers=$connection->prepare($sql);
		$getUsers->execute();
		$users=$getUsers->fetchAll();

		// $array=array(array('admin','admin'),
		// 			array('filan','fisteku')
		// 				);

	?>

		<div class="container">
      <br>
      <a href="adduser.php" style="font-size: 25px; color: yellow;">ADD NEW USER</a>
	<table style="width: 100%; color:white; border:1px solid yellow; margin:30px 0px;">
		<th style="	border:1px solid yellow;">ID</th>
		
		<th style="	border:1px solid yellow;">Username</th>
		<th style="	border:1px solid yellow;">E-mail</th>
    <th style=" border:1px solid yellow;">User role</th>
		<th style="	border:1px solid yellow;">Delete</th>
		<th style="	border:1px solid yellow;">Update</th>
		
		
		<?php

			foreach($users as $user)
			{
		?> 
			<tr style="	border:1px solid yellow;">
				<td style="	border:1px solid yellow;"><?= $user['ID'] ?>  </td> <!-- ?= osht njejt si me shkru <php echo -->
				
				<td style="	border:1px solid yellow;"><?= $user['username'] ?></td>

				<td style="	border:1px solid yellow;"><?= $user['email']?></td>

        <td style=" border:1px solid yellow;"><?= $user['users_role_id']?></td>
				
				<td style="	border:1px solid yellow;"><?= "<a href='delete.php?ID=$user[ID]'>Delete</a>" ?> </td>
				<td style="	border:1px solid yellow;"><?= "<a href='updateusers.php?ID=$user[ID]'>Update</a>" ?> </td>

			</tr>


		<?php

			}

		?>
	</table>
		</div>

<section id="company">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h4>Contact Us</h4>
            <ul>
              <li><i class="fa fa-phone"></i> 00 383 45 001 001</li>
              <li><i class="fa fa-envelope"></i> support@auto.com</li>
              <li><i class="fa fa-map"></i> Str. Tirana, Prishtina 10 000</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h4>Newsletter</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <form>
              <input type="text" name="email" placeholder="Enter Email">
              <button type="submit" name="button">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>Copyright &copy; 2020 | BEJAuto</p>
          </div>
        </div>
      </div>
    </footer>
   <!-- <script src="js/main.js"></script> -->
  </body>
</html>
