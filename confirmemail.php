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
	$subject = "Activate you account";
	$headers = "From: zenith_gean@yahoo.com";
	$body = "Hello $user,\n\n You Reservation has been confirmed by the Sacredhearts admin. Please Click on the link to sign in \n\nhttp://localhost/sacred/login.php\n\nThank You!";
	
	$sql= mysql_query("Select * from confirm_client where email = '$email'");
	$sql2= mysql_query("Select * from confirm_client where user = '$user'");
	if(mysql_num_rows($sql)> 0)
	{
		header("Location: clientsEmailError.php");
	}
	else
    {	
		if(mysql_num_rows($sql2)> 0)
		{
			header("Location: clientsUserError.php");
		}
		else
		{	
			if(!mail($to,$subject,$body,$headers))
			{
				echo "We couldn't confirm this time!";
			}
			else
			{
				$before = "INSERT INTO confirm_client(name, company_name, company_address, contact, sex, email, user, pass, pending_client_id) 
				VALUES((select name from pending_client where id='$id'), (select company_name from pending_client where id='$id'), (select company_address from pending_client where id='$id'), 
				(select contact from pending_client where id='$id'), (select sex from pending_client where id='$id'), (select email from pending_client where id='$id'), (select user from pending_client where id='$id'),
				(select pass from pending_client where id='$id'), $id)";
				mysql_query($before);
	
				$query = "UPDATE pending_client set status='Confirmed' where id='$id'";
				mysql_query($query);
	
				mysql_close($db);
				header("Location:clients.php");
			}
		}
	}
?>