<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//saved in DB
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up webpage</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: gray;">Sign up webpage</div>
			<div style="font-size: 20px;margin: 10px;color: white;">Username</div>

			<input id="text" type="text" name="user_name"><br><br>
            <div style="font-size: 20px;margin: 10px;color: white;">Email address</div>

            <input id="text" type="text" name="email_address"><br><br>
            <div style="font-size: 20px;margin: 10px;color: white;">Password</div>

			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Sign Up!"><br><br>

			<a href="login.php">Click to Log In</a><br><br>
		</form>
	</div>
</body>
</html>