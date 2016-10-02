<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
</head>
<body>
<?php 
	include 'conn.php';
	$q = 'select * from records';
	$result = mysql_query($q);
	if(!$result){
		echo "Select query failed.";
	}
	else{
		while($assoc = mysql_fetch_assoc($result))
		{
			print_r($assoc);
			echo "<br>";			
		}
	}
?>
</body>
</html>