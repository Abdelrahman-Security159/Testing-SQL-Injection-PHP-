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
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <div style="position:absolute; top: 160px; left: 450px;">
                    <input type="text" name="search" class="signupsuccinput" placeholder="Search..." style="width: 300px; font-size:50px;">
                </div>
                <div div style="position:absolute; top: 70px; left: 650px;">
                    <input type="submit" value="Search" class="submit">
                </div>
            </form>
        </div>
        <div>

            <?php
            
                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    if(isset($_POST["search"]) && $_POST["search"] != ""){
                        $userSearch = $_POST["search"];

                        $sqlQuery = "SELECT email, username FROM tb_gamers WHERE username LIKE '%$userSearch%';";

                        $connection = mysqli_connect("localhost", "root", "", "db_users");
                        $request  = mysqli_query($connection, $sqlQuery);
                        $flag = TRUE;
                        
                        $positions = array(475, 300, 350, 75);
                        
                        while($response = mysqli_fetch_array($request, MYSQLI_ASSOC)){
                            $flag = FALSE;

                            $divstyle = 
                                "style='position:absolute;" . 
                                "left:" . $positions[0] . "px; top: " . $positions[1] . 
                                "px; width:" . $positions[2] . "px; height:" . $positions[3] . "px;" . 
                                "border-left-style: groove; border-right-style: groove;" . 
                                "border-color: #111111;border-radius: 5px;'";

                                echo "<div $divstyle><p><strong>&nbsp;User : </strong> " . $response['username'] . 
                                                "<br><br><strong>&nbsp;Mail : </strong>" . $response['email'] . "</p></div>";

                                $positions[1] += 100;
                               
                        }
                        if(!isset($response) && $flag){
                            $errStyle = "style = 'position:absolute; left: 500px; top: 300px; color:#AA0000'";
                            echo "<h2 ". $errStyle . " <strong>[-] Sorry! no results</strong></h2>";
                        }
                    }
                }

            ?>

        </div>
    </div>

    <script type="text/javascript" src="jQuiry.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
