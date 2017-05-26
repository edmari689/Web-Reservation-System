<html>
<head>
	<style>
		body{

			background-color: #FEFCFF;

		}
		label{
			font-family: century gothic;
			font-size: 25px;
			color: #FFFFFF;
			position: absolute;
			left: 50px;
			top: 40px;
		}
		
		input.u{

			position: absolute;
			top: 298px;
			right: 480px;
			-moz-border-radius: 15px;
			border-radius: 15px;
			border:solid 1.5px black;
			padding: 3px;
		
		}
		input.p{

			position: absolute;
			top: 347px;
			right: 480px;
			-moz-border-radius: 15px;
			border-radius: 15px;
			border:solid 1.5px black;
			padding: 3px;

		}
		h4.u{

			position: absolute;
			top: 270px;
			left: 450px;
			font-family: book antiqua;
			font-size: 20px;

		}
		h4.p{

			position: absolute;
			top: 320px;
			left: 450px;
			font-family: book antiqua;
			font-size: 20px;

		}
		fieldset{

			margin: 0 auto;
			width: 480px;
			height: 200px;
			-moz-border-radius: 15px;
			border-radius: 15px;
			border:solid 3px black;
			background-color: #FFF5EE;

		}
		legend{

			font-family: lucida console;
			font-size: 23px;
			color:#9F000F;

		}
		button{

			background-color: #347C2C;
			width: 130px;
			-moz-border-radius: 15px;
			border-radius: 15px;
			padding: 5px;
			position: absolute;
			top: 390px;
			right: 470px;
			font-family: candara;
			color: #FFFFFF;
			font-size: 20px;

		}
		#wrapper{
		width:1350px;
		height:auto;
		position:relative;
		}
	</style>

</head>

<body>
<div id="wrapper">
	<div style="height: 80px; background-color: #2C3539">
		<label> Sacred Heart Spirituality Centre <b> Admin </b> </label>
	</div>
	<div style="height: 50px; background-color: #C11B17"></div>
	<div style="height: 90px;"></div>
	<div style="height: 500px; background-color: #FFFFFF"> 
	<fieldset>
	<legend> Sign In</legend>
	<form name="adminlog" action="adminlog.php" method="POST"> 	
		<table>
			<tr>
			<td><h4 class="u">Username : </h4></td>
			<td> <input type="text" size="45" class="u" name="user"> </td>
			</tr>
			<tr>
			<td> <h4 class="p">Password : </h4></td>
			<td> <input type="password" size="45" class="p" name="pass"> </td>
			</tr>
		</table>
	
	</fieldset>
		<button type="submit"> Sign In </button>
	</form>
	</div>

</body>
</html>
<?php
			session_start();
			if(isset($_SESSION['id']))
			{
			header("location: admin.php");
			}
			
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
			
			$user = $_REQUEST['user'];
			$pass = $_REQUEST['pass'];
			
			$query = "SELECT * FROM admin where username = '$user' and password = '$pass'";
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
				$_SESSION['username'] = $fetch_rows[3];
				header("location: admin.php");
			}
			else
				die("");
					
			mysql_close($db);
?>
</div>
</body>
</html>