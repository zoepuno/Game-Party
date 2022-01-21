<?php 
session_start();

session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gameparty</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <a href= "logout.php">Logout</a>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.php"><h1>gameparty</h1></a>
            <p>
              
            </p>
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs active">
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="#">
                <span class="#"></span><br class="hidden-xs"> ABC Games </a>
            </li>
            <li>
              <a href="accounts.html">
                <span class="#"></span><br class="hidden-xs"> Math Games</a>
            </li>
            <li>
              <a href="accounts.html">
                <span class="#"></span><br class="hidden-xs"> Cool Games!</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> Art Games</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> Accounts</a>
            </li>
           
          
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>
  <body>
  <style type = "text/css">

  #text{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;

  }
  #button{
    padding: 10px;
    width :100px;
    color: white;
    background-color: lightblue;
    border: none;

  }
  #box{

    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;

  }
  </style>

  <div id="box">
    <form method="post">
      <div style="font-size: 20px; margin:10px; color: white;">Login</div>
      <input id="text" type="text" name="user_name"><br><br>
      <input id="text" type="password" name="password"><br><br>
      <input id="button" type="submit" value="Login"><br><br>

      <a href="signup.php">Click to Signup</a><br><br>
    </form>
  </div>
</body>
  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:410-602-5008">
    <span class="glyphicon glyphicon-earphone"></span>
    410-602-5008
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>

  <div id="main-content" class="container">
    <h2 id="menu-categories-title" class="text-center">Accounts</h2>
    <div class="text-center">
      
    </div>

    <!--<section class="row">
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single-category.html">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu/B/B.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
    </section>

  </div><!-- End of #main-content -->-->

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        
        <section id="address" class="col-sm-4">
          <span>Contact:</span><br>
          gameparty@gmail.com<br>
          
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"This website has helped my kid so much!"                            -Parent</p>
          <p>"I have learned so much from this website!"                          - Kid</p>
        </section>
      </div>
            <div class="text-center">&copy; Copyright gameparty 2022</div>

    </div>
  </footer>


  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
