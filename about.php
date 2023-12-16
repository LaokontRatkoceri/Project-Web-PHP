<?php
  session_start();
  //  if (empty($_SESSION['ID'])) {
  //   header('Location:login.php');
  // }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BEJAuto | About</title>
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
                <li class="current"><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
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

    <!-- SUBHEADER -->
    <section id="subheader">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN PAGE -->
    <section id="page" class="about">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><span class="primary-text">Who</span> We Are</h2>
            <?php

              include_once("DbConn.php");
              $sql="SELECT * From about_us";
              $getAboutUs=$connection->prepare($sql);
              $getAboutUs->execute();
              $aboutUs=$getAboutUs->fetchAll();


              foreach($aboutUs as $about)
              {

              ?>
              <?php
                  if($_SESSION['roleID']==1)
               {

                 echo "<a href='updateaboutus.php?ID=$about[ID]' style='color:yellow; font-size:30px;'>UPDATE</a>";
               }
              ?>
                <?php echo "<p style='color:white'>";echo  $about['who_are_we'];echo "</p>"; ?>
                <hr>
                <?php
                 echo "<img src='";echo $about['img_path'];echo "'>";
                 ?>
            <h2><span class="primary-text">What</span> We Do</h2>

                 <?php echo "<p style='color:white'>"; echo $about['what_we_offer']; echo "</p>";?>
                 
          <?php
               }
          ?> 
          
            
            
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
