<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$donor_id = $_REQUEST['donor_id'];
	$type = $_REQUEST['type'];
	
	$donation_amount = $_REQUEST['donation_amount'];
	$donation_item = $_REQUEST['donation_item'];
	
	$date_received = $_REQUEST['date_received'];
	$date_released = $_REQUEST['date_released'];
	$receiver = $_REQUEST['receiver'];
	$foundation_receiver = $_REQUEST['foundation_receiver'];
	
	if($type == "Money")
	{
		if($date_released == NULL and $foundation_receiver == NULL)
		{
			$query = "INSERT INTO donation(donor_id, type, donation_amount, date_received, receiver)
			values('$donor_id','$type','$donation_amount','$date_received','$receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
		elseif($date_released == NULL)
		{
			$query = "INSERT INTO donation(donor_id, type, donation_amount, date_received, receiver, foundation_receiver)
			values('$donor_id','$type','$donation_amount','$date_received','$receiver','$foundation_receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
		elseif($foundation_receiver == NULL)
		{
			$query = "INSERT INTO donation(donor_id, type, donation_amount, date_received, date_released, receiver)
			values('$donor_id','$type','$donation_amount','$date_received','$date_released','$receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
		else
		{
			$query = "INSERT INTO donation(donor_id, type, donation_amount, date_received, date_released, receiver, foundation_receiver)
			values('$donor_id','$type','$donation_amount','$date_received','$date_released','$receiver' ,'$foundation_receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
	}
	
	else
	{
		if($date_released == NULL and $foundation_receiver == NULL)
		{
			$query = "INSERT INTO donation(donor_id, type, donation_item, date_received, receiver)
			values('$donor_id','$type','$donation_item','$date_received','$receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
		elseif($date_released == NULL)
		{
			$query = "INSERT INTO donation(donor_id, type, donation_item, date_received, receiver, foundation_receiver)
			values('$donor_id','$type','$donation_item','$date_received','$receiver','$foundation_receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
		elseif($foundation_receiver == NULL)
		{
			$query = "INSERT INTO donation(donor_id, type, donation_item, date_received, date_released, receiver)
			values('$donor_id','$type','$donation_item','$date_received','$date_released','$receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
		else
		{
			$query = "INSERT INTO donation(donor_id, type, donation_item, date_received, date_released, receiver, foundation_receiver)
			values('$donor_id','$type','$donation_item','$date_received','$date_released','$receiver' ,'$foundation_receiver')";
			mysql_query($query);
			mysql_close($db);
			header("Location: donationadmin.php");
		}
	}
?>