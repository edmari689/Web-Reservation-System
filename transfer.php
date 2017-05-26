<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$before_room = $_REQUEST['before_room'];
	$target_room = $_REQUEST['target_room'];
	$guest_no = $_REQUEST['guest_no'];
	$id = $_REQUEST	['id'];
	
	$sql= mysql_query("Select * from room_details where room_no = '$target_room'"); 
	//transfer guest to another room, update on another room's status
	$compare1 = mysql_query("Select count(guest_no) from guest_room_usage where room_no = '$target_room'");
	$compare2 = mysql_query("Select (capacity - 1) from room_details where room_no = '$target_room'");
	
	$c1 = mysql_fetch_row($compare1);
	$c2 = mysql_fetch_row($compare2);
	
	$sql2= mysql_query("Select * from room_details where room_no = '$before_room'"); //update on previous room's status
	$compare3 = mysql_query("Select count(guest_no) from guest_room_usage where room_no = '$before_room'");
	$compare4 = mysql_query("Select (capacity - (capacity - 1)) from room_details where room_no = '$before_room'");
	
	$c3 = mysql_fetch_row($compare3);
	$c4 = mysql_fetch_row($compare4);
	
	$sql3 = mysql_query("Select * from guest_room_usage where room_no = '$target_room'");
	
	$row = mysql_fetch_row($sql);
	$row2 = mysql_fetch_row($sql2);
	$row3 = mysql_fetch_row($sql3);

	if($row[3] == 'Inactive')
	{
		mysql_close($db);
		header("Location: rooms.php");
	}
	elseif($row[3] == 'Full')//finished
	{
		if($row2[3] == 'Inactive')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row2[3] == 'Empty')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row2[3] == 'Full')
		{
				mysql_close($db);
				header("Location: rooms.php");
		}
		elseif($row2[3] == 'Occupied')
		{
			mysql_close($db);
			header("Location: roomsError.php");
		}		
	}
	elseif($row[3] == 'Empty')//finished
	{
		$query = "UPDATE guest_room_usage set room_no='$target_room' where id='$id'";
		mysql_query($query);
		
		$updateRoom = "UPDATE room_details set status='Occupied' where room_no='$target_room'";
		mysql_query($updateRoom);
		
		if($row2[3] == 'Inactive')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row2[3] == 'Empty')
		{
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row2[3] == 'Full')
		{
			$updateRoom2 = "UPDATE room_details set status='Occupied' where room_no='$before_room'";
			mysql_query($updateRoom2);
			
			mysql_close($db);
			header("Location: rooms.php");
		}
		elseif($row2[3] == 'Occupied')
		{
			if($c3 > $c4)
			{
				mysql_close($db);
				header("Location: rooms.php");
			}
			elseif($c3 == $c4)
			{
				$updateRoom2 = "UPDATE room_details set status='Empty' where room_no='$before_room'";
				mysql_query($updateRoom2);
		
				mysql_close($db);
				header("Location: rooms.php");
			}
		}		
	}
	elseif($row[3] == 'Occupied')//finished
	{
		$query = "UPDATE guest_room_usage set room_no='$target_room' where id='$id'";
		mysql_query($query);
				
		if($c1 < $c2)
		{
			if($row2[3] == 'Empty')
			{
				mysql_close($db);
				header("Location: rooms.php");
			}
			elseif($row2[3] == 'Full')
			{
				$updateRoom2 = "UPDATE room_details set status='Occupied' where room_no='$before_room'";
				mysql_query($updateRoom2);
			
				mysql_close($db);
				header("Location: rooms.php");
			}
			elseif($row2[3] == 'Occupied')
			{
				if($c3 > $c4)
				{
					mysql_close($db);
					header("Location: rooms.php");
				}
				elseif($c3 == $c4)
				{
					$updateRoom2 = "UPDATE room_details set status='Empty' where room_no='$before_room'";
					mysql_query($updateRoom2);
		
					mysql_close($db);
					header("Location: rooms.php");
				}
			}		
		}
		elseif($c1 == $c2)
		{
			if($row3[2] == "$guest_no")
			{
				mysql_close($db);
				header("Location: rooms.php");
			}
			else
			{
				$updateRoom = "UPDATE room_details set status='Full' where room_no='$target_room'";
				mysql_query($updateRoom);
	
				if($row2[3] == 'Empty')
				{
					mysql_close($db);
					header("Location: rooms.php");
				}
				elseif($row2[3] == 'Full')
				{
					$updateRoom2 = "UPDATE room_details set status='Occupied' where room_no='$before_room'";
					mysql_query($updateRoom2);
			
					mysql_close($db);
					header("Location: rooms.php");
				}
				elseif($row2[3] == 'Occupied')
				{
					if($c3 > $c4)
					{
						mysql_close($db);
						header("Location: rooms.php");
					}
					elseif($c3 == $c4)
					{
						$updateRoom2 = "UPDATE room_details set status='Empty' where room_no='$before_room'";
						mysql_query($updateRoom2);
		
						mysql_close($db);
						header("Location: rooms.php");
					}
				}		
			}
		}
	}
	else
	{
		mysql_close($db);
		header("Location: rooms.php");
	}
?>