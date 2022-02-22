<?php 
    include_once 'header.php';

?>



<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--<link rel="stylesheet" href="css/reset.css">-->

    <link rel="stylesheet" href="css/styles.css">
    <!--<<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>-->
  </head>
<body>

        
    <?php
          /*if (isset($_SESSION["useruid"])){
                
            echo "<p>Welcome " . $_SESSION["useruid"] . " </p>";
               
          }*/
            
    ?>
    
  </section>
</div>
</div>


    <div id="home-tiles" class="row">
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
        <a href="#"><div id="game-tile"><span>Logic Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="#"><div id="tbd-tile"><span>Coming Soon</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="#"><div id="tbd-tile"><span>Coming Soon</span></div></a>
      </div>

            
    
</body>
    </div><!-- End of #home-tiles -->
  </div><!-- End of #main-content -->

  <?php 
      include_once 'footer.php';
  ?>
</html>
