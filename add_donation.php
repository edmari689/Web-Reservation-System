<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$address = $_REQUEST['address'];
	$contact = $_REQUEST['contact'];
	$company = $_REQUEST['company'];
	
	$query = "INSERT INTO donor(name,address,contact,company)
	values('$name','$address','$contact','$company')";
	mysql_query($query);
	mysql_close($db);
	header("Location: donorProfile.php");
?>