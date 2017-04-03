<html>
<body>

<?php
	$con = mysql_connect("localhost", "root", "jinHAO1995");
	if(!$con){
		echo "can't link to database";
		die('could not connect:'.mysql_error());
	}
	else
		echo "link successfully";
	
	//check if username being used
	mysql_select_db("website", $con);
	$result = mysql_query("select * from user where name  ='".$_POST["username"]."'");
	echo "<br>";
	if(mysql_fetch_array($result)){
		echo "the user has existed, please try another one";
	}else{
		echo "the user name has not been used"."<br>";
		mysql_query("insert into user(name, password) values ('".$_POST["username"]."','".$_POST["password"]."')");
		echo "<br>create successfullly!";
	}

?>
</body>
</html>
