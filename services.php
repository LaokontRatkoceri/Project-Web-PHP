  <?php
  global $connection;
	 session_start();
	include_once("DbConn.php");
  // if (empty($_SESSION['ID'])) {
  //   header('Location:login.php');
  // }
?>

<!DOCTYPE html>
<html>
<head>
	<title>BEJAuto | Services</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
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
               
                <!-- <li><a href="#"> Loged in as <?= $_SESSION['username']?></a></li>  -->
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>



	
	<section id="page" class="services">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          	
            <h2><span class="primary-text">See</span> What We Offer</h2>
              <?php
                if ($_SESSION['roleID']==1) {
                echo "<a href='insertservices.php' style='color:yellow; font-size
                :25px;'>ADD SERVICE</a>";
                }
                $sql="SELECT * From services";
                $getServices=$connection->prepare($sql);
                $getServices->execute();
                $services=$getServices->fetchAll();

                // $array=array(array('admin','admin'),
                //      array('filan','fisteku')
                //        );

              ?>
		
		<?php

			foreach($services as $service)
			{
		?> 

			
            <!-- <img src="images/services.png"> -->
				<?php echo "<img src='";echo $service['service_img_path'];echo "'>"; ?>
				
            <ul>
              	<li>
                	<h3><?= $service['service_name'] ?></h3>
              	</li>
              	<li>
                	<p><?=  $service['service_description'] ?></p>
                </li>
                <li>
                	<p><?= $service['service_price'] ?></p>
                </li>
                <?php if($_SESSION['roleID']==1)
				{

				echo "<a href='update.php?ID=$service[ID]'style='color:yellow; font-size:25px;'>UPDATE</a>";
                echo " n/";
 				echo "<a href='DeleteService.php?ID=$service[ID]'style='color:yellow; font-size:25px;'>DELETE</a>";

				}
				?>

              </li>	

		<?php

			}
       if ($_SESSION['roleID']==1) {
    echo "<a href='insertservices.php' style='color:yellow; font-size
    :25px;'><br><br>ADD SERVICE</a>";
    }

		?> 
			 </ul>
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
</body>
</html>