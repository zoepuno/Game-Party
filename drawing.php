


<!doctype html>
<html lang="en">

<div id="wrapper">
<header>
    <link rel="stylesheet" href="drawing.css">
    
<div id="sketch">
  <canvas id="paint"></canvas>
</div>

<div id="settings"> Colours
  <button onclick="getColor('blue');">Blue</button>
  <button onclick="getColor('red');">Red</button>
  <button onclick="getColor('green');">Green</button>
  <button onclick="getColor('white');">White</button>
  <button onclick="getColor('#333333');">Eraser</button>
</div>

<div id="settings"> Brush Size
  <button onclick="getSize('2');">Small</button>
  <button onclick="getSize('5');">Med</button>
  <button onclick="getSize('10');">Large</button>
  <button onclick="getSize('20');">X Large</button>
</div>

</div>
 <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/drawing.js"></script>
  
    
