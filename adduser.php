<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BEJAuto | Sign Up</title>
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
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                  if(empty($_SESSION['ID']))
                  {
                    ?>
                <li  class="current"><a href="login.php">Login</a></li>
                <?php
                  }else
                  {

                  ?>
                  <li><a href="logout.php">Logout</a></li>
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
            <h1>Register</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN PAGE -->
    <section id="page" class="login">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><span class="primary-text"><i class="fa fa-user"></i>  Register</span> here</h2>
            <div class="signin">
             <form action="adduserlogic.php" method="POST">
              <div>
                <label for="name" style="color: black;">Username</label><br>
                <input type="text" name="username" placeholder="username" id="un">
              </div>
              <div>
                <label for="password" style="color: black;">Password</label><br>
                <input type="password" name="pass" placeholder="password" id="pass">
              </div>
              <div>
                <label for="password" style="color: black;">Confirm password</label><br>
                <input type="password" name="confirmPass" placeholder="confirm password" id="confirm-pass">
              </div>
              <div>
                <label for="email" style="color: black;">E-mail</label><br>
                <input type="email" name="email" placeholder="e-mail" id="email">
              </div>
              <div>
                <label for="role" style="color: black;">Role of user</label><br>
                <select type="email" name="user_role" placeholder="e-mail" id="email">
                  <option value="1">Admin</option>
                  <option value="2">User</option>
                </select>
              </div>
              <button type="submit" name="submit" onclick="signupValidation()">Sign Up</button>
              <br><br>
            <!-- <button type="button" value="Sign up" onclick="signupValidation()">Sign up</button><br><br> -->
         <div id="msg" style="text-decoration: none;color:black;"></div><br><!-- Sign up js -->
       <a href="forget.php" style="margin-right:0px;font-size:13px; color:black;"><h3>Forgot  Password</h3></a>
      <br>
      Already have account?<a href="login.php" style="text-decoration: none;color:black;">&nbsp;Log in</a>  
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
