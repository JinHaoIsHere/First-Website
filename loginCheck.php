<html>
<body>

<?php
if ($_POST["username"] == "admin" && $_POST["password"] == "admin")
	echo "<h1>SUCCESS!</h1>";
else{
	echo "<h1>FAILL!</h1>";
	echo "faillll";
	$con = mysql_connect("localhost","root","jinHAO1995");
	echo "ff";
	if(!$con){
		echo "can't link to database";
		die('could not connect:'.mysql_error());}
	else
		echo "link successfully";	
	mysql_select_db("website", $con);
	if(!mysql_query("insert into user values('jinlu',2,'5555')",$con))
		echo "failll";
	echo "<h1>succeed</h1>";
	//print password
	$result = mysql_query("select * from user",$con);
	while($row = mysql_fetch_array($result))
	{
		echo "case".$row['name']."<br />";
	}
	
	mysql_close($con);
	}
?>

</body>
</html>
