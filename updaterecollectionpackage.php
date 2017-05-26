<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$type = $_REQUEST['type'];
	$amount = $_REQUEST['amount'];
	$status = $_REQUEST['status'];
	$id = $_REQUEST['id'];

	
	$query = "UPDATE recollection_package set service_name='$name' where id='$id'";
	mysql_query($query);
	$query = "UPDATE recollection_package set type='$type' where id='$id'";
	mysql_query($query);
	$query = "UPDATE recollection_package  set amount='$amount' where id='$id'";
	mysql_query($query);
	$query = "UPDATE recollection_package  set status='$status' where id='$id'";
	mysql_query($query);

	
	mysql_close($db);
	header("Location: service.php");
?>