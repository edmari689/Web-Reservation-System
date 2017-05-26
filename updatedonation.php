<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$donor_id = $_REQUEST['donor_id'];
	$donation_amount = $_REQUEST['donation_amount'];
	$donation_item = $_REQUEST['donation_item'];
	$date_received = $_REQUEST['date_received'];
	$date_released = $_REQUEST['date_released'];
	$receiver = $_REQUEST['receiver'];
	$foundation_receiver = $_REQUEST['foundation_receiver'];
	$id = $_REQUEST	['id'];

	$query = "UPDATE donation set donor_id='$donor_id' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donation set donation_amount='$donation_amount' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donation set donation_item='$donation_item' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donation set date_received='$date_received' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donation set date_released='$date_released' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donation set receiver='$receiver' where id='$id'";
	mysql_query($query);
	$query = "UPDATE donation set foundation_receiver='$foundation_receiver' where id='$id'";
	mysql_query($query);
	
	mysql_close($db);
	header("Location: donationadmin.php");
?>