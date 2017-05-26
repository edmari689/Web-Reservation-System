<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$room_no = $_REQUEST['room_no'];
	$capacity = $_REQUEST['capacity'];
	$status = $_REQUEST['status'];
	
	$sql= mysql_query("Select * from room_details where room_no = '$room_no'");
	if(mysql_num_rows($sql)> 0)
	{
		header("Location: roomadddetails.php");
	}
	else
    {
		$query = "INSERT INTO room_details(room_no, capacity, status)
		VALUES('$room_no', '$capacity', '$status')";
		mysql_query($query);
		mysql_close($db);
		header("Location: roomprofile.php");
    }
?>