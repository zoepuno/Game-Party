<?php //to check if user is logged in;
	session_start();

	include("connection.php");
	include("functions.php");
	/*$dbhost = "localhost:8889";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "login_db";

	if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
	{
		die("failed to connect!");
	}*/

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		//something was posted
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		//$sql_u = "SELECT * FROM users WHERE user_name='$user_name'";
		//$res_u = mysqli_query($sql_u);

		/*if(mysqli_num_rows($res_u) > 0) 
		{
  	  		//$name_error = "Sorry... username already taken";
  	  		echo "This username has been taken.";
  	  	} 	*/
		if(!empty($user_name) && !empty($password))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
//save
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter some valid information.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	
</head>
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
			<div style="font-size: 20px; margin:10px; color: white;">Signup</div>
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>


	

</body>
</html>