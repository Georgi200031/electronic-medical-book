<?php 
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$egn = $_POST['egn'];
		$f_name = $_POST['f_name'];
		$m_name = $_POST['m_name'];
		$l_name = $_POST['l_name'];
		$bloodtype = $_POST['bloodtype'];
		$birthdate = $_POST['birthdate'];
		$alergies = $_POST['alergies'];
		$imunization = $_POST['imunization'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$gender = $_POST['gender'];
		
				$query = "insert into patien (egn,f_name,m_name,l_name,bloodtype,birthdate,alergies,imunization,weight,height,gender) values ('$egn','$f_name','$m_name','$l_name','$bloodtype','$birthdate','$alergies','$imunization','$weight','$height','$gender')";
				pg_query($con, $query);
				header("Location: index.php");
				die;
		
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
			<div style="font-size: 20px;margin: 10px;color: white;">Add patient</div>
			<label>EGN</label>
			<input id="text" type="text" name="egn"><br><br>
			<label>Firstname</label>
			<input id="text" type="text" name="f_name"><br><br>
			<label>Middlename</label>
			<input id="text" type="text" name="m_name"><br><br>
			<label>Lastname</label>
			<input id="text" type="text" name="l_name"><br><br>
			<label>Bloodtype</label>
			<input id="text" type="text" name="bloodtype"><br><br>
			<label>Birthday</label>
			<input id="text" type="text" name="birthdate"><br><br>
			<label>Alergies</label>
			<input id="text" type="text" name="alergies"><br><br>
			<label>imunization</label>
			<input id="text" type="text" name="imunization"><br><br>
			<label>Weight</label>
			<input id="text" type="text" name="weight"><br><br>
			<label>Height</label>
			<input id="text" type="text" name="height"><br><br>
			<label>Gender</label>
			<input id="text" type="text" name="gender"><br><br>
			<input id="button" type="submit" value="add patient"><br><br>
			
		</form>
	</div>
</body>
</html>