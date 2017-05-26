<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$checkinDate = $_REQUEST['checkinDate'];
	$checkoutDate = $_REQUEST['checkoutDate'];
	$guest = $_REQUEST['guest'];
	$type = $_REQUEST['type'];
	$id = $_REQUEST	['id'];
	
	$query = "UPDATE reservation set checkin_date='$checkinDate' where id='$id'";
	mysql_query($query);
	$query = "UPDATE reservation set checkout_date='$checkoutDate' where id='$id'";
	mysql_query($query);
	$query = "UPDATE reservation set guest='$guest' where id='$id'";
	mysql_query($query);
	$query = "UPDATE reservation set type='$type' where id='$id'";
	mysql_query($query);

	
	mysql_close($db);
	header("Location: reservationadmin.php");
?>