<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$checkinDate = $_REQUEST['checkinDate'];
	$checkoutDate = $_REQUEST['checkoutDate'];
	$occupants = $_REQUEST['occupants'];
	$type = $_REQUEST['type'];
	$id = $_REQUEST['id'];
	$client_id = $_REQUEST['client_id'];
	
	$show = mysql_query("select status from reservation where id='$id'");
	
	while($row = mysql_fetch_array($show)){
		$stat = $row['status'];
		if($stat == 'Confirmed'){
			mysql_close($db);
			header("Location: profile.php");
		}
		else
		{
			$before = "INSERT INTO cancel_reservation(checkin_date, checkout_date, guest, type, modify, client_id, reserve_id) 
			VALUES((select checkin_date from reservation where id='$id'), (select checkout_date from reservation where id='$id'),
			(select guest from reservation where id='$id'), (select type from reservation where id='$id'), now(),
			(select client_id from reservation where id='$id'),	'$id')";
			//select checkin_date, checkout_date, guest, type, client_id from reservation where id='$id'";
			mysql_query($before);
	
			$query = "DELETE FROM reservation where id='$id'";
			mysql_query($query);
	
			$query2 = "DELETE FROM calendar where id='$id'";
			mysql_query($query2);
			mysql_close($db);
			header("Location: profile.php");
		}
	}
?>