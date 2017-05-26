<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$occupation = $_REQUEST['occupation'];
	$sex = $_REQUEST['sex'];
	$id = $_REQUEST	['id'];
	
	$query = "UPDATE guest set name='$name' where id='$id'";
	mysql_query($query);
	$query = "UPDATE guest set address='$address' where id='$id'";
	mysql_query($query);
	$query = "UPDATE guest set occupation='$occupation' where id='$id'";
	mysql_query($query);
	$query = "UPDATE guest set sex='$sex' where id='$id'";
	mysql_query($query);

	mysql_close($db);
	header("Location: guest.php");
?>