<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$contact = $_REQUEST['contact'];
	$company = $_REQUEST['company'];
	$sex = $_REQUEST['sex'];
	$age = $_REQUEST['age'];
	$id = $_REQUEST	['id'];
	
	$query = "DELETE FROM donor where id='$id'";
	mysql_query($query);
	mysql_close($db);
	header("Location: donorProfile.php");
?>