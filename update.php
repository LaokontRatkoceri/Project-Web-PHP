<?php
 // if (empty($_SESSION['ID'])) {
 //    header('Location:login.php');
 //  }

global $connection, $connect, $deleteService, $user;
include_once("DbConn.php");
	$id=$_GET['ID'];
	$sql="SELECT * FROM services WHERE ID=$id";
	$getServices = $connection->prepare($sql);
	$getServices->execute();
	$services=$getServices->fetchAll();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BEJAuto | Update Service</title>
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- HEADER -->
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
                <li class="current"><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                if(!empty($_SESSION['roleID'])){
                 if ($_SESSION['roleID']==1)
                
                {
                  ?>
                  <li><a href="dashboard.php">Dashboard</a></li>
                  
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

    <!-- SUBHEADER -->
    <section id="subheader">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>Update table</h1>
          </div>
        </div>
      </div>
    </section>

    	<section id="page" class="login">
    		<div class="container">
        		<div class="row center-xs center-sm center-md center-lg">
          			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          				<h2><span class="primary-text"><i class="fa fa-check"></i>  Fill the</span> data</h2>
          				<div class="signin">

						<form action="updateLogic.php" method="POST">
							<div>
							<label for="name" style="color: black;">Services ID</label><br>
							<input type="text" value="<?= $services[0]['ID'] ?>" name='ID' readonly>
							</div>
							<!-- <br> -->
							<div>
							<label for="name" style="color: black;">Service Name</label><br>
							<input type="text" value="<?= $services[0]['service_name']?>" name='name'>
							</div>
							<!-- <br> -->
							<div>
							<label for="name" style="color: black;">Service Price</label><br>
							<input type="text" value="<?= $services[0]['service_price']?>" name='price'>
							</div>
							<!-- <br> -->
							<div>
								<label for="name" style="color: black;">Service Description</label><br>
							<input type="text" value="<?= $services[0]['service_description']?>" name='description'>
							</div>
							<!-- <br> -->
							<div>
								<label for="name" style="color: black;">Image path</label><br>
							<input type="text" value="<?= $services[0]['service_img_path']?>" name='images'>
							</div>
							
							<!-- <br> -->
							<div>
                                <button type="submit" name='update'>Update</button>
                                <button style="margin-bottom: 2px" type="submit" name='delete'>Delete</button>
							</div>
						</form>
					</div>
        		</div>
     		</div>
    	</section>

    	<!-- COMPANY -->
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
   <script src="js/main.js"></script>
  </body>
</html>
