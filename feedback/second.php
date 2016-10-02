<html>
<head>
	<title>response</title>
	<h1>Thank You</h1>
</head>
<body>
Your response has been recorded.
<body>




<?php 

include 'conn.php';

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$sspeaker = $_POST["sspeaker"];
$s = $_POST["s"];
$topics = $_POST["topics"];

$query="INSERT INTO `records`(`q1`, `q2`, `q3`, `q4`, `q5`, `topics`, `sspeaker`, `s`) VALUES ('$q1','$q2','$q3','$q4','$q5','$topics','$sspeaker','$s')";
$result = mysql_query($query);

mysql_close();

?>

</body>
</html>