<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$account_no = $_REQUEST['account_no'];
	$confirm_id = $_REQUEST['confirm_id'];
	$amount = $_REQUEST['amount'];
	$type_person = $_REQUEST['type_person'];
	$type_event = $_REQUEST['type_event'];
	$id = $_REQUEST	['id'];
	
	$query = "UPDATE payment set account_no='$account_no' where id='$id'";
	mysql_query($query);
	$query = "UPDATE payment set confirm_id='$confirm_id' where id='$id'";
	mysql_query($query);
	$query = "UPDATE payment set amount='$amount' where id='$id'";
	mysql_query($query);
	$query = "UPDATE payment set pay_date=now() where id='$id'";
	mysql_query($query);
	$query = "UPDATE payment set type_person='$type_person' where id='$id'";
	mysql_query($query);
	$query = "UPDATE payment set type_event='$type_event' where id='$id'";
	mysql_query($query);

	mysql_close($db);
	header("Location: payment.php");
?>