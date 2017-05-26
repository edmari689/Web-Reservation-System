<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$room_no = $_REQUEST['room_no'];
	$capacity = $_REQUEST['capacity'];
	$status = $_REQUEST['status'];
	$id = $_REQUEST	['id'];
	
	$sql = mysql_query("Select count(guest_no) - count(checkout_date from guest_room_usage where room_no = '$room_no'");
	if(mysql_num_rows($sql)> 0)
	{
		mysql_close($db);
		header("Location: roomprofileError.php");
	}
	else
    {	
		$query = "UPDATE room_details set room_no='$room_no' where id='$id'";
		mysql_query($query);
		$query = "UPDATE room_details set capacity ='$capacity' where id='$id'";
		mysql_query($query);
		$query = "UPDATE room_details set status='$status' where id='$id'";
		mysql_query($query);

		mysql_close($db);
		header("Location: roomprofile.php");
	}
?>