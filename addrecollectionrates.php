<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$service_name = $_REQUEST['service_name'];
	$type = $_REQUEST['type'];
	$amount = $_REQUEST['amount'];
	$status = $_REQUEST['status'];
	
	
	$query = "INSERT INTO recollection_package(service_name, guest_type, amount,status) 
		VALUES('$service_name', '$type', '$amount','$status')";
	mysql_query($query);
	mysql_close($db);
	header("Location:service.php");
	
?>