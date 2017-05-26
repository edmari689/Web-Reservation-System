<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
		
	$guest_out = mysql_query("SELECT * FROM guest_room_usage");
	$rowx = mysql_num_rows($guest_out);

	for($a=0; $a < $rowx; $a++)
	{
		$empty = "UPDATE room_details set status='Empty' where status != 'Inactive'";
		mysql_query($empty);
		
		$checking_confirmation= mysql_query("SELECT * FROM checkout where confirm_id = '".mysql_result($guest_out, $a, 'confirm_id')."'");
		$row = mysql_fetch_row($checking_confirmation);
		
		if($row[3] == mysql_result($guest_out, $a, 'confirm_id'))
		{
			$scan_checkout= mysql_query("Select * from checkout where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."'");
			if(mysql_num_rows($scan_checkout) > 0)
			{
				$updateCheckout = "UPDATE checkout set room_no=(select room_no from guest_room_usage where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."') where guest_no='".mysql_result($guest_out, $a, 'guest_no')."' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
				mysql_query($updateCheckout);
			
				$updateCheckout = "UPDATE checkout set checkout_date=now() where guest_no='".mysql_result($guest_out, $a, 'guest_no')."' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
				mysql_query($updateCheckout);
			
				$after = "DELETE FROM guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'";
				mysql_query($after);
			}
			else
			{
				$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
				VALUES((select room_no from guest_room_usage where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."'), '".mysql_result($guest_out, $a, 'guest_no')."', 
				(select confirm_id from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'),
				(select checkin_date from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'), now())";
				mysql_query($before);
			
				$after = "DELETE FROM guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'";
				mysql_query($after);
			}
		}
		else
		{
			$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
			VALUES((select room_no from guest_room_usage where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."'), '".mysql_result($guest_out, $a, 'guest_no')."', 
			(select confirm_id from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'),
			(select checkin_date from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'), now())";
			mysql_query($before);
			
			$after = "DELETE FROM guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'";
			mysql_query($after);
		}
	}
	mysql_close($db);
	header("Location: rooms.php");
?>