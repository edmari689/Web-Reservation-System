<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$company_name = $_REQUEST['company_name'];
	$company_address = $_REQUEST['company_address'];
	$contact = $_REQUEST['contact'];
	$sex = $_REQUEST['sex'];
	$email = $_REQUEST['email'];
	$user = $_REQUEST['user'];
	$id = $_REQUEST['id'];
	
	$query = "UPDATE confirm_client set name='$name' where id='$id'";
	mysql_query($query);
	$query = "UPDATE confirm_client set company_name='$company_name' where id='$id'";
	mysql_query($query);
	$query = "UPDATE confirm_client set company_address='$company_address' where id='$id'";
	mysql_query($query);
	$query = "UPDATE confirm_client set contact='$contact' where id='$id'";
	mysql_query($query);
	$query = "UPDATE confirm_client set sex='$sex' where id='$id'";
	mysql_query($query);
	$query = "UPDATE confirm_client set email='$email' where id='$id'";
	mysql_query($query);
	$query = "UPDATE confirm_client set user='$user' where id='$id'";
	mysql_query($query);
	
	mysql_close($db);
	header("Location: clients.php");
?>