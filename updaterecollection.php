<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$student = $_REQUEST['student'];
	$regular_guest = $_REQUEST['regular_guest'];
	$meals = $_REQUEST['meals'];
	$snacks = $_REQUEST['snacks'];
	
	$query = "UPDATE recollection_service set student='$student' where id=1";
	mysql_query($query);
	$query = "UPDATE recollection_service set regular_guest='$regular_guest' where id=1";
	mysql_query($query);
	$query = "UPDATE recollection_service set meals='$meals' where id=1";
	mysql_query($query);
	$query = "UPDATE recollection_service set snacks='$snacks' where id=1";
	mysql_query($query);

	
	mysql_close($db);
	header("Location: service.php");
?>