<?php
if(isset($_GET['ID'])){
  require_once'../../require/connect133p.php';
  $ID = mysqli_real_escape_string($dbc, $_GET['ID']);
  
  $sql = "SELECT * FROM games WHERE image_ID = '$ID' ";
  $reult = myspqli_query($dbc $sql) or die("Bad Query: $sql");
  $row = mysqli_fetch_array($result);
  
  $sql = "CREATE TABLE IF NOT EXISTS gameComments(
  comment_ID integer not null primary key auto_increment,
  name varchar(128),
  title varchar(256)'
  comment text,
  G_ID integer,
  tm timestamp)";
  
  $result = mysqli_query($dc, $sql) or die("Bad Query: $sql");
  
  if(isset($_GET['post'])){
    $name = mysqli_real_escape_string($dbc, $_GET['name']);
    $title = mysqli_real_escape_string($dbc, $_GET['title']);
    $post = mysqli_real_escape_string($dbc, $_GET['post']);
    
    $sql = "INSET INTO gameComments (name, title, comment, G_ID) VALUES ('$name', '$title', '$post',
    $result = mysqli_query($dbc, $sql) or die("Bad Insert: $sql);
  }
}
?>
  
<!DOCTYPE html>
<html lang = 'en-US'>
<head>
<meta charset = 'utf-8'>
<title> Art Games </title>
</head>
<body>

<div id = 'container'>
  <h1> Art Games</h1>
  
  <?php
  require_once 'nav.html';
  ?>
  
  <content>
  <h1> <?php echo $row['title'] ?></h1>
  <h3>Console: <?php echo $row['console'] ?></h3>
  <h4>Genre: <?php echo $row['genre'] ?></h4>
  <img_src = 'uploads/<?php echo $row['img'] ?>' id='mainImg'>
  























         
