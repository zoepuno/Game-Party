<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gameparty</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
       

    <link rel="stylesheet" href="css/styles.css">
    
 </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li >
              <a href="index.php">
                <span class="#"></span><br class="hidden-xs">Home</a>
            </li>
            <li>
              <a href="alphabetgames.php">
                <span class="#"></span><br class="hidden-xs"> ABC Games</a>
            </li>
            <li>
              <a href="mathgames.php">
                <span class="#"></span><br class="hidden-xs"> Math Games</a>
            </li>
            <li>
              <a href="artgames.php">
                <span class="#"></span><br class="hidden-xs"> Art Games</a>
            </li>
            <li>
              <a href="logicgames.php">
                <span class="#"></span><br class="hidden-xs"> Logic Games</a>
            </li>


            <?php 
            if(!isset($_SESSION["user_id"]))
            {
              echo"<li>
              <a href='login.php'>
                <span class='#'></span><br class='hidden-xs'> Login/Sign Up</a>
              </li>";
              
            }
            else
            {
               echo "<li>
                <a href='welcome.php'>
                  <span class='#'></span><br class='hidden-xs'> My Profile</a>
              </li>
               <li>
                <a href='logout.php'>
                  <span class='#'></span><br class='hidden-xs'> Logout</a>
              </li>";
            }
            
            ?>
              <!--/*if (isset($_SESSION["useruid"])){
                  echo "<li><a href='profile.php'>Profile page</a></li>";
                  echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
              }
              else{
                  echo "<li><a href='signup.php'>Sign Up</a></li>";
                  echo "<li><a href='login.php'>Log in</a></li>";
              }*/
            ?>-->
          
           
          
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->

    </nav><!-- #header-nav -->

  </header>
  <script src="js/app.js"></script>
