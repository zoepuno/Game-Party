<?php
      include_once 'header.php';
      include 'config.php';
?>
  <!DOCTYPE html>

<link rel="stylesheet" href="css/2048.css">

<div class="container">
  <div class="heading">
    <h1 class="title">2048</h1>
    <div class="score-container">0</div>
  </div>

  <div class="game-container">
    <div class="game-message">
      <p></p>
      <div class="lower">
        <a class="retry-button">Retry</a>
      </div>
    </div>

    <div class="grid-container">
      <div class="grid-row">
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
      </div>
      <div class="grid-row">
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
      </div>
      <div class="grid-row">
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
      </div>
      <div class="grid-row">
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
        <div class="grid-cell"></div>
      </div>
    </div>

    <div class="tile-container">

    </div>
  </div>

  
 <!-- <p class="game-explanation">
    <strong class="important">提示:</strong> 按方向键或者触摸屏幕即可开玩
  </p>
  <hr>
 	<p>2014</p>
    -->
</div>
 <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/2048.js"></script>
  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.6/hammer.min.js'></script>