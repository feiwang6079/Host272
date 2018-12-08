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
  <!-- facebook login-->
  
  <!-- <div id="fb-root"></div> -->
  <!-- <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=383680055702229&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script> -->
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '735063520183061',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="register.php" method="POST">
        <h2 class="form-login-heading">Register now</h2>
        <div class="login-wrap">
          <?php include('errors.php'); ?>
          <input type="text" class="form-control" placeholder="Username" autofocus name="username">
          <br>
          <input type="text" class="form-control" placeholder="Email" autofocus name="email">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password_1">
          <br />
          <input type="password" class="form-control" placeholder="Retype Password" name="password_2">
          <br />
          <button class="btn btn-theme btn-block" type="submit" name="reg_user"><i class="fa fa-pencil"></i> Register</button>
          <hr>
          <!-- <div class="login-social-link centered">
            <p>or you can sign in via your social network</p> -->
            <!-- <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button> -->
             
            
          <!-- </div> -->
          <div class="registration">
            Have an account already?<br/>
            <a class="" href="index.php">
              Log in Here!
              </a>
          </div>
        </div>
        <!-- Modal -->
  
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

  <!--facebook-->
  <script>
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    });
  // This is called with the results from from FB.getLoginStatus().
  document.getElementById('logina').onclick = function(){//登录
  FB.login(function(response) {
      if (response.status === 'connected') {
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
          });
      } else {
        console.log('该用户没有登录');
      }
    }, {scope: 'public_profile,email'});
  };
  </script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->



<div id="status">
</div>
</body>

</html>
