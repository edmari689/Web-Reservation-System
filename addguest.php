<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$sex = $_REQUEST['sex'];
	
	$query = "INSERT INTO guest(name, address, sex) 
	VALUES('$name', '$address', '$sex')";
	mysql_query($query);
	mysql_close($db);
	header("Location: guest.php");
?>