<html>
<body>

<?php
	$con = mysql_connect("localhost","root","jinHAO1995");
	if(!$con){
		echo "can't link to database";
		die('could not connect:'.mysql_error());}
	else
		echo "link successfully<br>";	
	mysql_select_db("website", $con);
	//print password
	$result = mysql_query("select * from user where name = '".$_POST["username"]."' and password = '".$_POST["password"]."'",$con);
	if($row = mysql_fetch_array($result))
	{
		//echo "case".$row['name']."<br />";
		echo "log in successfully";
	}
	else
		echo "wrong username or password";
	
	mysql_close($con);
	
?>

</body>
</html>
