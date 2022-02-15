
<?php
  include("insert.php");

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = "";
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: '. mysqli_error());
   

    $sql = "SELECT * FROM art";
     mysqli_select_db($conn, 'games');
    $result = mysqli_query($conn, $sql ) or die("Could not get data: " .mysqli_error($conn));

echo "<table>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $image_url = $row['url'];
    $image_path = $row['img'];
  echo "<tr>
         <td>".$row['title']."</td>
           <td>
           <a href=".$image_url."><img src=uploads/$image_path width='250' height='250' alt='' /></a>
      </td>
        </tr>";     
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "css/styles.css">
<title> Art Games </title>
</head>

<body>
    <a href="https://quickdraw.withgoogle.com/"><div id= "art-tile"><span></span></div></a>

  <form action = "" method="POST">
    name<input type="text" name="title"><br>
    img<input type="text" name="img"><br>
    url<input type="text" name="url"><br>
    <input type= "submit" name="submit">
  </form>
  </body>
  <body>
    
  </body>

</html>
</html>

