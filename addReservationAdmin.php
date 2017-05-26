<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$checkinDate = $_REQUEST['checkinDate'];
	$checkoutDate = $_REQUEST['checkoutDate'];
	
	$guest = $_REQUEST['guest'];
	$type = $_REQUEST['type'];
	
	$client_id = $_REQUEST['client_id'];
	
	$recollection_id = $_REQUEST['recollection_id'];
	$retreat_id = $_REQUEST['retreat_id'];
	
	$bin = mysql_query("Select checkin_date, checkout_date from reservation where id in(select id from reservation where (checkin_date <= '$checkinDate' and checkout_date >= '$checkinDate') or (checkin_date <=  '$checkoutDate' and checkout_date >= '$checkoutDate') or (checkin_date >= '$checkinDate' and checkout_date <= '$checkoutDate'))");
	
	if(mysql_num_rows($bin) > 0)
	{	
		header("Location: addreservationsError.php");
	}
	else
    {
		if($checkoutDate < $checkinDate)
		{
			mysql_close($db);
			header("Location: addreservationsError2.php");
		}
		else
		{
			if($type == "Retreat")
			{
				$query = "INSERT INTO reservation(checkin_date, checkout_date, guest, type, status, client_id, retreat_id) 
				VALUES('$checkinDate', '$checkoutDate', '$guest', '$type', 'Pending', '$client_id', '$retreat_id')";
				mysql_query($query);
		
				$query2 = "INSERT INTO calendar(checkin_date, checkout_date, client_id) 
				VALUES('$checkinDate', '$checkoutDate', '$client_id')";
				mysql_query($query2);
		
				mysql_close($db);
				header("Location: reservationadmin.php");
			}
			else
			{
				$query = "INSERT INTO reservation(checkin_date, checkout_date, guest, type, status, client_id, recollection_id) 
				VALUES('$checkinDate', '$checkoutDate', '$guest', '$type', 'Pending', '$client_id', '$recollection_id')";
				mysql_query($query);
	
				$query2 = "INSERT INTO calendar(checkin_date, checkout_date, client_id) 
				VALUES('$checkinDate', '$checkoutDate', '$client_id')";
				mysql_query($query2);
	
				mysql_close($db);
				header("Location: reservationadmin.php");
			}
		}
    }
?>