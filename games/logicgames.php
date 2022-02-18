<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Logic Games</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <form action = "" method="POST">
        name<input type="text" name="name"><br>
        img<input type="text" name="img"><br>
        url<input type="text" name="url"><br>
        <input type= "submit" name="submit">
    </form>

        <div class="container">

           <?php
            include("insert.php");

            $conn = mysqli_connect('localhost','root',"") or die('Could not connect: '. mysqli_error());

            $query  = "SELECT * FROM logic";
            mysqli_select_db($conn, 'games');
            $run = mysqli_query($conn,$query) or die("Could not get data: " .mysqli_error($conn));

            if(mysqli_num_rows($run) > 0){
                while($row = mysqli_fetch_array($run)){

                    $image = $row['img'];
                    $image_url = $row['url'];
                    $title = $row['name'];
        
          ?>
    
            <div class="image-grid">

                <div class="text">
                <h5><?php echo $title?></h5>
                </div>

                <div class="image">
                    <a href="<?php echo $image_url ?>">
                    <img src="uploads/<?php echo $image ?>">
                    </a>
                </div>

            </div>

              <?php
                }
                }
              ?>
        </div>

    <script src="jquery.js"></script>        
    <script src="lightbox.min.js"></script>

</body>
</html>
