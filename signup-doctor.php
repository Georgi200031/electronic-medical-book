<?php 
	session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$egn_ = $_POST['egn'];
		$f_name_ = $_POST['f_name'];
		$m_name_ = $_POST['m_name'];
		$l_name_ = $_POST['l_name'];
		$email_ = $_POST['email'];
		$password_ = $_POST['password'];
		$specialization_ = $_POST['specialization'];
		if(!empty($egn_) && !empty($f_name_) && !empty($m_name_) && !empty($l_name_) && !empty($email_) && !empty($password_)&& !empty($specialization_))
		{	
			$user_id = random_num(20);
            $query = "insert into doctor (egn,f_name,m_name,l_name,email,password,spec,user_id) values ('$egn_','$f_name_','$m_name_','$l_name_','$email_','$password_','$specialization_','$user_id')";	
			pg_query($con, $query);
			header("Location: index.php");
			die;
		}
		else 
		{
			echo "wrong data!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body style = "background: url(image.jpg);
              background-size:100%;
              background-repeat: no-repeat;">
<link rel="stylesheet" href="style-website.css">
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<label>EGN</label>
			<input id="text" type="text" name="egn"><br><br>
			<label>Firstname</label>
			<input id="text" type="text" name="f_name"><br><br>
			<label>Middlename</label>
			<input id="text" type="text" name="m_name"><br><br>
			<label>Lastname</label>
			<input id="text" type="text" name="l_name"><br><br>
			<label>Email</label>
			<input id="text" type="text" name="email"><br><br>
			<label>Password</label>
			<input id="text" type="password" name="password"><br><br>
			<label>specialization</label>
			<input id="text" type="text" name="specialization"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>