<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<html>
	<head>

		<script>
			function myFunction(){
			window.print();
			}
		</script>

		<style>
			th{
				font-family: candara;
				font-size: 15px;
				width: 300px;
			}
		</style>

	</head>
<body>
	<img src="sacredlogo.jpg" width="50px" height="50px" /><label style="font-family: candara; font-size: 40px"> Sacred Heart Spirituality Centre </label><br/>
	<sub>Seminary Road, Pink Sister St., Catalunan Grande, Davao City, 8000</sub>
	<hr>
	<form>	
		
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				
				echo "<center><label style='font-family: candara; font-size: 20px'> Pending Client Records </label></center>";
				$query = "SELECT * FROM pending_client where status = 'Pending'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1' align='center'>";
				echo "<tr><th>Name</th><th>Company Name</th><th>Company Address</th><th>Contact</th><th>Sex</th><th>Email Address</th><th>Username</th><th>Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'company_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'company_address');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'contact');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'sex');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'email');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'user');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				
				$query2 = "SELECT * FROM confirm_client";
				$r2 = mysql_query($query2);
				$rows2 = mysql_num_rows($r2);
				echo "<br/>";
				echo "<center><label style='font-family: candara; font-size: 20px'> Confirm Client Records </label></center>";
				echo "<table border='1' align='center'>";
				echo "<tr><th>Name</th><th>Company Name</th><th>Company Address</th><th>Contact</th><th>Email Address</th><th>Username</th></tr>";
				for($j=0; $j < $rows2; $j++){
					echo "<td><p>";
					echo mysql_result($r2, $j, 'name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'company_name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'company_address');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'contact');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'email');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'user');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>
				
	</form>

	
	<center> <label> Official Copy of Sacred Heart Spirituality and Formation Center </label></center>
	<center><u><p onclick="myFunction()"> Print this page.</p></u></center>



</body>
</html>