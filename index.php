<?php 
	session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query = "select * from doctor where email = '$email' limit 1";
			$result = pg_query($con, $query);
			if($result)
			{
				if($result && pg_num_rows($result) > 0)
				{
					$user_data = pg_fetch_assoc($result);	
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: menu.html");
						die;
					}
				}
			}
			echo "wrong username or password!";
		}
		else
			{
				echo "wrong username or password!";
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body style = "background: url(image.jpg);
              background-size:100%;
              background-repeat: no-repeat;">
<link rel="stylesheet" href="style-website.css">	
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<label>Email</label>
			<input id="text" type="text" name="email"><br><br>
			<label>Password</label>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Login Doctor"><br><br>
			<a href="signup-doctor.php">Click to Signup Doctor</a><br><br>
		</form>
	</div>
</body>
</html>