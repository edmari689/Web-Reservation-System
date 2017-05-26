<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$sex = $_REQUEST['sex'];
	$age = $_REQUEST['age'];
	$id = $_REQUEST	['id'];
	
	$query = "DELETE FROM guest where id='$id'";
	mysql_query($query);
	mysql_close($db);
	header("Location: guest.php");
?>