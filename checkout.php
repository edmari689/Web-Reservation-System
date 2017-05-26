<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$room_no = $_REQUEST['room_no'];
	$guest_no = $_REQUEST['guest_no'];
	$id = $_REQUEST['id'];
	
	$sql= mysql_query("Select * from room_details where room_no = '$room_no'"); 
	$scan_checkout= mysql_query("Select * from checkout where guest_no = '$guest_no'");
	$compare1 = mysql_query("Select count(guest_no) from guest_room_usage where room_no = '$room_no'");
	$compare2 = mysql_query("Select (capacity - (capacity - 1)) from room_details where room_no = '$room_no'");
	$c1 = mysql_fetch_row($compare1);
	$c2 = mysql_fetch_row($compare2);
	
	$row = mysql_fetch_row($sql);
	
	$guest_out = mysql_query("SELECT * FROM guest_room_usage");
	$rowx = mysql_num_rows($guest_out);
	
	for($a=0; $a < $rowx; $a++)
	{
		$checking_confirmation= mysql_query("SELECT * FROM checkout where confirm_id = '".mysql_result($guest_out, $a, 'confirm_id')."'");
		$row2 = mysql_fetch_row($checking_confirmation);
		
		if($row[3] == 'Inactive')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		if($row[3] == 'Empty')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row[3] == 'Full')
		{	
			if($row2[3] == mysql_result($guest_out, $a, 'confirm_id'))
			{
				if(mysql_num_rows($scan_checkout) > 0)
				{
					$updateCheckout = "UPDATE checkout set room_no='$room_no' where guest_no='$guest_no' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
					mysql_query($updateCheckout);
			
					$updateCheckout = "UPDATE checkout set checkout_date=now() where guest_no='$guest_no' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
					mysql_query($updateCheckout);
			
					$after = "DELETE FROM guest_room_usage where id='$id'";
					mysql_query($after);
				}
				else
				{
					$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
					VALUES('$room_no', '$guest_no', (select confirm_id from guest_room_usage where id='$id'),
					(select checkin_date from guest_room_usage where id='$id'), now())";
					mysql_query($before);
			
					$after = "DELETE FROM guest_room_usage where id='$id'";
					mysql_query($after);
				}
			}
			else
			{
				$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
				VALUES('$room_no', '$guest_no', (select confirm_id from guest_room_usage where id='$id'),
				(select checkin_date from guest_room_usage where id='$id'), now())";
				mysql_query($before);
			
				$after = "DELETE FROM guest_room_usage where id='$id'";
				mysql_query($after);
			}
				
			$updateRoom = "UPDATE room_details set status='Occupied' where room_no='$room_no'";
			mysql_query($updateRoom);
			
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row[3] == 'Occupied')
		{	
			if($row2[3] == mysql_result($guest_out, $a, 'confirm_id'))
			{
				if(mysql_num_rows($scan_checkout) > 0)
				{
					$updateCheckout = "UPDATE checkout set room_no='$room_no' where guest_no='$guest_no' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
					mysql_query($updateCheckout);
			
					$updateCheckout = "UPDATE checkout set checkout_date=now() where guest_no='$guest_no' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
					mysql_query($updateCheckout);
			
					$after = "DELETE FROM guest_room_usage where id='$id'";
					mysql_query($after);
				}
				else
				{
					$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
					VALUES('$room_no', '$guest_no', (select confirm_id from guest_room_usage where id='$id'),
					(select checkin_date from guest_room_usage where id='$id'), now())";
					mysql_query($before);
			
					$after = "DELETE FROM guest_room_usage where id='$id'";
					mysql_query($after);
				}
			}
			else
			{
				$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
				VALUES('$room_no', '$guest_no', (select confirm_id from guest_room_usage where id='$id'),
				(select checkin_date from guest_room_usage where id='$id'), now())";
				mysql_query($before);
			
				$after = "DELETE FROM guest_room_usage where id='$id'";
				mysql_query($after);
			}
		
			if($c1 > $c2)
			{
				mysql_close($db);
				header("Location: rooms.php");
			}
			elseif($c1 == $c2)
			{
				$updateRoom = "UPDATE room_details set status='Empty' where room_no='$room_no'";
				mysql_query($updateRoom);
	
				mysql_close($db);
				header("Location: rooms.php");
			}
		}	
	}
?>