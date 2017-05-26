<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	
	$name = $_REQUEST['name'];
	$company_name = $_REQUEST['company_name'];
	$company_address = $_REQUEST['company_address'];
	$contact = $_REQUEST['contact'];

	$sex = $_REQUEST['sex'];
	$email = $_REQUEST['email'];
	
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	
	$sql = mysql_query("Select * from pending_client where email = '$email'");
	$sql2 = mysql_query("Select * from pending_client where user = '$user'");
	if(mysql_num_rows($sql)> 0)
	{
		header("Location: registerEmailError.php");
	}
	else
    {	
		if(mysql_num_rows($sql2)> 0)
		{
			header("Location: registerUserError.php");
		}
		else
		{	
			$query = "INSERT INTO pending_client(name, company_name, company_address, contact, sex, email, user, pass, status) 
			VALUES('$name', '$company_name', '$company_address', '$contact', '$sex', '$email', '$user', md5('$pass'),'Pending')";
		
			mysql_query($query);
			mysql_close($db);
			header("location:homepage.php");
		}
	}
?>