<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
				
	$name = $_REQUEST['name'];
	$company_name =  $_REQUEST['company_name'];
	$company_address =  $_REQUEST['company_address'];
	$contact =  $_REQUEST['contact'];
	$sex =  $_REQUEST['sex'];
	$email =  $_REQUEST['email'];
	$user =  $_REQUEST['user'];
	$pass =  $_REQUEST['pass'];
	$id = $_REQUEST['id'];
	
	$to = $email;
	$subject = "Account rejected";
	$headers = "From: zenith_gean@yahoo.com";
	$body = "Hello $user,\n\n You account has been rejected by the Sacredhearts admin.Please Click on the link to check-again and sign up with a valid information \n\nhttp://localhost/sacred/register.php\n\nThank You!";
	
	if(!mail($to,$subject,$body,$headers))
		echo "We couldn't reject this time!";
	else
	{
		$query = "UPDATE pending_client set status='Cancelled' where id='$id'";
		mysql_query($query);
	
		mysql_close($db);
		header("Location:clients.php");
	}
?>