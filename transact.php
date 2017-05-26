<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$id = $_REQUEST['id'];
	$actual_total = $_REQUEST['actual_total'];
	$guest_count = $_REQUEST['guest_count'];
	
	$query = "UPDATE running_amount set total='$actual_total' where confirm_id='$id'";
	mysql_query($query);
	
	$query = "UPDATE confirmation set guest='$guest_count' where id='$id'";
	mysql_query($query);
	
	mysql_close($db);
	header("Location: payment.php");
?>