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
    <title>BEJAuto | Home</title>
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jSlider.css">
    <script src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/jquery.jSlider.js"></script>
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
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
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
    <div id="msg" style="text-decoration: none;color:black;">You are logged in</div><br>

    <!-- SHOWCASE -->
    <section>
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
            <div class="slideri">
              <div id="slider1" class="jSlider">
                <div><img src="images/showcase.jpg" alt="" /></div>
                <div><img src="images/about.jpg" alt="" /></div>
                <div><img src="images/showcase.jpg" alt="" /></div>
                <div><img src="images/about.jpg" alt="" /></div>   
              </div>
            </div>
     </section>

    <!-- FEATURES -->
    <section id="features">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
            <h2>Services</h2>
            <p>What's Included</p>
            <!-- ICON ROW 1 -->
            <div class="row center-xs center-sm center-md center-lg">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <i class="fa fa-dashboard"></i><br>
                <h4>Fully Optimized</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <i class="fa fa-question-circle-o"></i><br>
                <h4>Free Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <i class="fa fa-rocket"></i><br>
                <h4>Maintance</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
            </div>

            <!-- ICON ROW 2 -->
            <div class="row center-xs center-sm center-md center-lg">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <i class="fa fa-line-chart"></i><br>
                <h4>Complete diagnostics</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <i class="fa fa-users"></i><br>
                <h4>Multi-User</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <i class="fa fa-plug"></i><br>
                <h4 >Engine problems</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- INFO SECTION -->
    <section id="info">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <img src="images/auto.png" alt="">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h2>Services </h2>
            <ul>
              <li><i class="fa fa-check"></i> Fully Optimized</li>
              <li><i class="fa fa-check"></i> Free Support</li>
              <li><i class="fa fa-check"></i> Maintance</li>
              <li><i class="fa fa-check"></i> Complete diagnostics</li>
              <li><i class="fa fa-check"></i> Mulitple Users</li>
              <li><i class="fa fa-check"></i> Engine problems</li>
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
    <script src="js/main.js"></script>
  </body>
</html>
