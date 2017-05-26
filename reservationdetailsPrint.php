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
		<center><label style="font-family: candara; font-size: 20px"> Reservation Record </label></center>

			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM reservation INNER JOIN client ON reservation.client_id=client.id ORDER BY reservation.id ASC";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<td><p>";
					echo mysql_result($r, $i, 'client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.occupants');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.status');
					
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