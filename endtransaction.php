<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$id = $_REQUEST['id'];
	$total = $_REQUEST['total'];
	$sum = $_REQUEST['sum'];
	$balance = $_REQUEST['balance'];
	$changer = $_REQUEST['changer'];
	
	echo $id;
	echo $total;
	echo $sum;
	echo $balance;
	echo $changer;
	
	
	if($balance > 0)
	{
		mysql_close($db);
		header("Location: paymentError.php");
	}
	else
	{
		$query = "INSERT INTO payment(paid_date, confirm_id, actual_balance, amount_paid, changer) 
		VALUES(now(), '$id', '$total', '$sum', '$changer')";
		mysql_query($query);
		
		$update = "UPDATE confirmation set payment_status='Paid' where id='$id'";
		mysql_query($update);
	
		mysql_close($db);
		header("Location: finalpayment.php");
	}
?>