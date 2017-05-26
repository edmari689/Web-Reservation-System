<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$company_name = $_REQUEST['company_name'];
	$company_address = $_REQUEST['company_address'];
	$contact = $_REQUEST['contact'];
	$user = $_REQUEST['user'];
	$id = $_REQUEST['id'];
	
	$query = "DELETE FROM confirm_client where id='$id'";
	mysql_query($query);
	mysql_close($db);
	
	header("Location: clients.php");
?>