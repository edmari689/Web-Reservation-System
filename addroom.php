<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$room_no1 = $_REQUEST['room_no1'];
	$guest_no1 = $_REQUEST['guest_no1'];
	$confirm_client = $_REQUEST['confirm_client'];
	
	$sql= mysql_query("Select * from room_details where room_no = '$room_no1'");
	$sql2= mysql_query("Select * from guest_room_usage where room_no = '$room_no1'");
	$guest_check= mysql_query("Select * from guest_room_usage where guest_no = '$guest_no1'");
	$compare1 = mysql_query("Select count(guest_no) from guest_room_usage where room_no = '$room_no1'");
	$compare2 = mysql_query("Select capacity from room_details where room_no = '$room_no1'");
	$compare3 = mysql_query("Select (capacity - 1) from room_details where room_no = '$room_no1'");
	$c1 = mysql_fetch_row($compare1);
	$c2 = mysql_fetch_row($compare2);
	$c3 = mysql_fetch_row($compare3);
	
	while($row = mysql_fetch_row($sql))
	{
		if($row[3] == 'Inactive')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row[3] == 'Full')
		{
			mysql_close($db);
			header("Location: roomsError.php");
		}
		elseif($row[3] == 'Empty')
		{
			if(mysql_num_rows($guest_check) > 0)
			{
				mysql_close($db);
				header("Location: roomsError.php");
			}
			else
			{
				$query = "INSERT INTO guest_room_usage(room_no, guest_no, confirm_id, checkin_date) 
				VALUES('$room_no1', '$guest_no1', '$confirm_client', now())";
				mysql_query($query);

				$updateRoom = "UPDATE room_details set status='Occupied' where room_no='$room_no1'";
				mysql_query($updateRoom);
					
				mysql_close($db);
				header("Location: rooms.php");
			}
		}
		elseif($row[3] == 'Occupied')
		{
			if($c1 == $c3)
			{			
				if(mysql_num_rows($guest_check) > 0)
				{
					mysql_close($db);
					header("Location: roomsError.php");
				}
				else
				{
					$query = "INSERT INTO guest_room_usage(room_no, guest_no, confirm_id, checkin_date) 
					VALUES('$room_no1', '$guest_no1', '$confirm_client', now())";
					mysql_query($query);

					$updateRoom = "UPDATE room_details set status='Full' where room_no='$room_no1'";
					mysql_query($updateRoom);
					
					mysql_close($db);
					header("Location: rooms.php");
				}
			}
			elseif($c1 < $c2)
			{
				if(mysql_num_rows($guest_check) > 0)
				{
					mysql_close($db);
					header("Location: roomsError.php");
				}
				else
				{
					$query = "INSERT INTO guest_room_usage(room_no, guest_no, confirm_id, checkin_date) 
					VALUES('$room_no1', '$guest_no1', '$confirm_client', now())";
					mysql_query($query);
					
					mysql_close($db);
					header("Location: rooms.php");
				}
			}
		}
		else
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
	}
?>