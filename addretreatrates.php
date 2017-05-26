<?php

	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$service_name = $_REQUEST['service_name'];
	$amount = $_REQUEST['amount'];
	$status = $_REQUEST['status'];
	
	$query = "INSERT INTO retreat_package(service_name,amount,status) 
		VALUES('$service_name','$amount','$status')";
	mysql_query($query);
	mysql_close($db);
	header("Location:service.php");
	
?>

