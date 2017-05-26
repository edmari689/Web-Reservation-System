<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$id = $_REQUEST	['id'];
	$reserve_id = $_REQUEST	['reserve_id'];
	$email =  $_REQUEST['email'];
	
	$to = $email;
	$subject = "Confirmation has been cancelled";
	$headers = "From: zenith_gean@yahoo.com";
	$body = "Your confirmed reservation has been cancelled by the Sacredhearts admin.";
	
	if(!mail($to,$subject,$body,$headers))
		echo "We couldn't confirm this time!";
	else
	{
		$before = "INSERT INTO cancel_reservation(checkin_date, checkout_date, guest, type, modify, client_id, reserve_id) 
		VALUES((select checkin_date from reservation where id='$reserve_id'), (select checkout_date from reservation where id='$reserve_id'),
		(select guest from reservation where id='$reserve_id'), (select type from reservation where id='$reserve_id'), now(),
		(select client_id from reservation where id='$reserve_id'),	'$reserve_id')";
		//select checkin_date, checkout_date, occupants, type, client_id from reservation where id='$id'";
		mysql_query($before);
	
		$query = "DELETE FROM confirmation where id='$id'";
		mysql_query($query);
	
		$query2 = "DELETE FROM reservation where id='$reserve_id'";
		mysql_query($query2);
	
		$query3 = "DELETE FROM calendar where id='$reserve_id'";
		mysql_query($query3);
	
		mysql_close($db);
		header("Location: confirmation.php");
	}
?>