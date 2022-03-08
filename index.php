<?php 
    include_once 'header.php';

?>



<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--<link rel="stylesheet" href="css/reset.css">-->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      
       

    
    <!--<link rel="stylesheet" href="css/styles.css">-->
    <!--<<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>-->
  </head>
<body>

        
    <?php
          /*if (isset($_SESSION["useruid"])){
                
            echo "<p>Welcome " . $_SESSION["useruid"] . " </p>";
               
          }*/
            
    ?>
    
  
</div>
</div>
<header id="header">
    
</header>
<section>
  <div class = "cursor"></div>

  <h2 id="text"><span>It's time to play</span><br>gameparty</h2>
  
  <img src="img/bird1.png" id="bird1">
  <img src="img/bird2.png" id="bird2">
  <img src="img/forest.png" id="forest">
  
  <img src="img/rocks.png" id="rocks">
  <img src="img/water.png" id="water">
  <a href="bubble.php" id="btn">Explore</a>
</section>
  
  <script>
    let text = document.getElementById('text');
    let bird1 = document.getElementById('bird1');
    let bird2 = document.getElementById('bird2');
    let forest = document.getElementById('forest');
    let btn = document.getElementById('btn');
    let rocks = document.getElementById('rocks');
    let header = document.getElementById('header');

    window.addEventListener('scroll', function(){
      let value = window.scrollY;

      text.style.top = 50 +value * -0.5 + '%';
      bird1.style.top = value * -1.5 + 'px';
      bird1.style.left = value * 2 +  'px';
      bird2.style.top = value * -1.5 + 'px';
      bird2.style.left = value * -5 +  'px';
      btn.style.marginTop = value * 1.5 + 'px';
      rocks.style.top = value * -0.12 + 'px';
      forest.style.top = value * 0.25 + 'px';
      header.style.top = value * 0.5 + 'px';
    })

  </script>
  <div class="sec">
    <h2></h2>

    <!--<div id="home-tiles" class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="alphabetgames.php"><div id="alphabet-tile"><span>Alphabet Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="mathgames.php"><div id="math-tile"><span>Math Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="artgames.php"><div id="art-tile"><span>Art Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="logicgames.php"><div id="logic-tile"><span>Logic Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="#"><div id="tbd-tile"><span>Coming Soon</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="#"><div id="tbd-tile"><span>Coming Soon</span></div></a>
      </div>-->
  </div>
  </body>
<!--<a href="#" class="logo">gameparty</a>-->
    
      <!--<ul>
        <li><a href='#' class="active">Home</a></li>
        <li><a href='#'>Alphabet Games</a></li>
        <li><a href='#'>Art Games</a></li>
        <li><a href='#'>Math Games</a></li>
        <li><a href='#'>Logic Games</a></li>
        <li><a href='#'>Profile Page</a></li>
      </ul>-->
    </div><!-- End of #home-tiles -->
  </div><!-- End of #main-content -->

  <?php 
      //include_once 'footer.php';
  ?>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bubble.js"></script>
  
</html>

