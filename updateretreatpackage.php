<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$amount = $_REQUEST['amount'];
	$status = $_REQUEST['status'];
	$id = $_REQUEST['id'];

	
	$query = "UPDATE retreat_package set service_name='$name' where id='$id'";
	mysql_query($query);
	$query = "UPDATE retreat_package  set amount='$amount' where id='$id'";
	mysql_query($query);
	$query = "UPDATE retreat_package  set status='$status' where id='$id'";
	mysql_query($query);

	
	mysql_close($db);
	header("Location: service.php");
?>