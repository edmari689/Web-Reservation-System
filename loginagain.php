<?php
error_reporting(E_ALL ^ E_DEPRECATED);

session_start();
$db = mysql_connect('localhost','root','root');
mysql_select_db('sacredheart');
			
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
			
$query = "SELECT * FROM confirm_client where user = '$user' and pass = md5('$pass')";
$r = mysql_query($query);
$rows = mysql_num_rows($r);
if(!$r)
{
	die("Database access failed: " . mysql_error());
}
elseif($rows == 1)
{
	$fetch_rows = mysql_fetch_row($r);
	$_SESSION['id'] = $fetch_rows[0];
	$_SESSION['name'] = $fetch_rows[1];
	header("location: homepage.php");
}
else
{
?>

<html>
    <head>
		<title> Login </title>
        <style>
            h3.a1 
            {
                position: absolute;
                left: 100px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;

            } 
            h3.a2 
            {
                position: absolute;
                left: 200px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
            h3.a3 
            {
                position: absolute;
                left: 455px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
            h3.a4 
            {
                position: absolute;
                left: 350px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
			 h3.a5 
            {
                position: absolute;
                right: 50px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity:0;
            }
			 h3.a6 
            {
                position: absolute;
                right: 120px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
            input.tuser
			{
            position: absolute;
            right: 200px;
            top:40%;
			-moz-border-radius: 6px;
			border-radius: 6px;
			border:solid 2px black;
			padding: 10px;
			}
            input.tpass
            {
            position: absolute;
            right: 200px;
            top:50%;
			-moz-border-radius: 6px;
			border-radius: 6px;
			border:solid 2px black;
			padding: 10px;
			}
			label.user
			{
				position:absolute;
				top: 41%;
				right: 452px;
				font-family: calibri;
				color: #000000;
				font-size: 150%;
			}
			label.pass
			{
				position:absolute;
				top: 51%;
				right: 452px;
				font-family: calibri;
				color: #000000;
				font-size: 150%;
			}
			label.log
			{
				position:absolute;
				top: 13%;
				right: 230px;
				font-family: calibri;
				color: #000000;
				font-size: 500%;
			}
			button.blog
			{
				position: absolute;
            	right: 225px;
            	top:62%;
				-moz-border-radius: 6px;
				border-radius: 6px;
				border:solid 2px black;
				padding: 10px;
			}
			a.register{

				position: absolute;
            	right: 220px;
            	top:37%;
			}
			.red
			{
			color: red;
			position: absolute;
			top: 55%;
			right: 8%;
			}
			.forgot
			{
				position: absolute;
            	right: 20%;
            	top: 70%;
			}
			.site
			{
				position: absolute;
            	right: 20%;
            	top: 75%;
			}
        </style>

    </head>
	<body background="hotair.jpg">
		

		<div id="menu" style="width: 10%">
		
		
		<label class = "log"> Log in </label>
		
		<a href="register.php" class="register"> <font face = "Courier" color = "#7F525D"> not yet registered?</font> </a>
		<a href = "forgot.php" class="forgot"><u> Forgot your Password </u></a>	
		<a href = "homepage.php" class="site"><u> Back to Home </u></a>		

		
		<form name="loginagain" action="loginagain.php"> 	
		<center>			
		<table border="0">
			<center>
			<tr><td>
				<label class = "user"><font color = "black">Username: </font></label>
					<input type="text" class="tuser" name="user" id="user" style="width:250px">
				</td></tr>
			<tr><td>
				<label class = "pass"><font color = "black">Password: </font></label>
					<input type="password" class="tpass" name="pass" id="pass" style="width:250px">
			</td></tr>
			<tr><td>
				<p class='red'>Please enter your username and password if there is empty slot/invalidation</p>
			</td></tr>
			</center>
		</table>
		</center><br>
		
		<center>
		<button class = "blog"   type = "submit" value = "Login" style = "width:200px; background-color: #347C2C; color: #FFFFFF; font-family: calibri; font-size: 130%"> Login </button>
		
		</center>
		</form>
		
		</div>
		
	</body>
</html>

<?php
}					
mysql_close($db);
?>