<?php include('server_market.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.php" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <?php include('errors.php'); ?>
          <input type="text" class="form-control" placeholder="Username" autofocus name="username">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <br />
          <button class="btn btn-theme btn-block" type="submit" name="login_user"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <!-- <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            
          </div> -->
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="register.php">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        
        <?php 
            include 'config.php';
            $sql = "select count(id) as count from market_current_user";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($result);
            $count = $row['count'];
            
            if($count == 0)
            {
            }
            else 
            {
                header("Location: allcompanies.php");
            }
        ?>
        
        
        
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/bg1.jpg", { //$.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
