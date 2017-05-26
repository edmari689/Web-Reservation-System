<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$room_no = $_REQUEST['room_no'];
	$capacity = $_REQUEST['capacity'];
	$no_of_beds = $_REQUEST['no_of_beds'];
	$status = $_REQUEST['status'];
	$id = $_REQUEST	['id'];
	
	$query = "DELETE FROM room_details where id='$id'";
	mysql_query($query);
	mysql_close($db);
	header("Location: roomprofile.php");
?>