<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$id = $_REQUEST	['id'];
	
	$query = "DELETE FROM payment where id='$id'";
	mysql_query($query);
	mysql_close($db);
	header("Location: payment.php");
?>