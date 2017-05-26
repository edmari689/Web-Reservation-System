<?php

error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$reserve_id = $_REQUEST['reserve_id'];
	$id = $_REQUEST	['id'];
	$guest = $_REQUEST	['guest'];
	$client_name = $_REQUEST['client_name'];
	$confirm_name = $_REQUEST['confirm_name'];
	
	$email =  $_REQUEST['email'];
	
	$select = "select * from reservation where id='$id'";
	$result = mysql_query($select);
	
	$to = $email;
	$subject = "Reservation has been confirmed";
	$headers = "From: zenith_gean@yahoo.com";
	$body = "Your reservation has been confirmed by the Sacredhearts admin.";
	
	
	$sql= mysql_query("Select * from confirmation where reserve_id = '$reserve_id'");
	if(!mail($to,$subject,$body,$headers))
		echo "We couldn't confirm this time!";
	else
	{
		while($row = mysql_fetch_array($result)){
		$stat = $row['status'];
		
		if($stat == 'Cancelled'){
			mysql_close($db);
			header("Location: reservationdetails.php");
		}
		else{
			$before2 = "UPDATE reservation set status='Confirmed' where id='$id'";
			mysql_query($before2);
			$before2 = "UPDATE reservation set guest='$guest' where id='$id'";
			mysql_query($before2);
			
			if(mysql_num_rows($sql)> 0){
				$during = "UPDATE confirmation set guest='$guest' where reserve_id='$reserve_id'";
				mysql_query($during);
				
				$during = "UPDATE confirmation set confirm_name='$confirm_name' where reserve_id='$reserve_id'";
				mysql_query($during);
				
				mysql_close($db);
				header("Location: confirmation.php");
				}
			else{
				$query = "INSERT INTO confirmation(reserve_id, guest, date_stamp, client_name, confirm_name, payment_status) 
				VALUES('$reserve_id', '$guest', now(), '$client_name', '$confirm_name', 'Unpaid')";
				mysql_query($query);
				
				mysql_close($db);
				header("Location: confirmation.php");
				}
			}
		}
	}
?>
