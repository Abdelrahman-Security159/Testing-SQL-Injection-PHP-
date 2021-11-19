<?php

    include "userisready.php";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AzoraSEC</title>
    <link rel="icon" href="image/AzoraICON.png">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">

  </head>
  <body>
                                            <!-- Nav Start-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navfix">
    <a class="navbar-brand" href="index.html"><img class="imgsize" src="image/AzoraICON.png"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.html">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signinUsername.html">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php" tabindex="-1" aria-disabled="true">Dashboard</a>
        </li>
      </ul>
    </div>
  </nav>
                                          <!-- Nav End-->

    <div>
      <div>
        <img class="backImage" src="image/bk/<?php echo $_COOKIE["username"] . '.jpg' ?>" alter="BackgroundImage">
      </div>
      <div style="position: absolute; left: 500px; top: 250px; radius: 10px;">
        <img class="proImage" src="image/<?php echo $_COOKIE["username"] . '.jpg' ?>" alter="profileImage">
      </div>
      <div class="details">
        <p><strong>User : </strong><?php echo $_COOKIE["username"] ?></p>
        <p><strong>Mail : </strong><?php echo $_COOKIE["email"] ?></p>
        <p><input class="submit" type="button" onclick="location.href='/AzoraSEC/updateuser.html';" value="Update your account" /></p>
      </div>
    </div>

    <script type="text/javascript" src="jQuiry.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>