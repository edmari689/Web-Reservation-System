<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$contact = $_REQUEST['contact'];
	$company = $_REQUEST['company'];
	$id = $_REQUEST	['id'];
	
	$query = "UPDATE donor set name='$name' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donor set address='$address' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donor set contact='$contact' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donor set company='$company' where id='$id'";
	mysql_query($query);
	
	mysql_close($db);
	header("Location: donorProfile.php");
?>