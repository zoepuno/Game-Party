<?php
  include("insert.php");

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = "";
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Could not connect: '. mysqli_error());
   

    $sql = "SELECT * FROM math";
     mysqli_select_db($conn, 'games');
    $result = mysqli_query($conn, $sql ) or die("Could not get data: " .mysqli_error($conn));

echo "<table>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $image_url = $row['url'];
    $image_path = $row['img'];
  echo "<tr>
         <td>".$row['name']."</td>
           <td>
           <a href=".$image_url."><img src=uploads/$image_path width='250' height='250' alt='' /></a>
      </td>
        </tr>";     
}
?>

<!DOCTYPE html>
<html>
 <title> Math Games </title>
<head>
    <link rel = "stylesheet" href = "css/styles.css">
</head>
<body>


  <form action = "" method="POST">
    name<input type="text" name="title"><br>
    img<input type="text" name="img"><br>
    url<input type="text" name="url"><br>
    <input type= "submit" name="submit">
  </form>
  </body>

</html>
</html>
