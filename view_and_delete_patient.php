<?php 
	$host = "localhost"; 
	$user = "postgres"; 
	$pass = "Georgi123"; 
	$db = "mydata"; 
	$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
		or die ("Could not connect to server\n"); 
	$query = "SELECT * FROM patien"; 
	$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
  
	echo"<h4>Models</h4>";
	echo "<table><tr><th>EGN</th><th>Firstname</th><th>Middlename</th><th>Lastname</th><th>Bloodtype</th><th>birthdate</th><th>Alergies</th><th>Imunization</th><th>Weight</th><th>Height</th><th>Gender</th></th>";
	while ($row = pg_fetch_row($rs)) {
		echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th> <th>$row[3]</th><th> $row[4] </th> <th>$row[5]</th> <th>$row[6] </th><th> $row[7]</th><th> $row[8]</th><th> $row[9]</th><th> $row[10]</th>
		";
?>
    <th><a href="delete.php?egn=<?php echo "$row[0]"; ?>">Delete</a></th></tr>
<?php							
	}
?>