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
				background-color: #d1d0ce;
			}
			
		</style>

	</head>
<body>
	<img src="sacredlogo.jpg" width="50px" height="50px" /><label style="font-family: candara; font-size: 40px"> Sacred Heart Spirituality Centre </label><br/>
	<sub>Seminary Road, Pink Sister St., Catalunan Grande, Davao City, 8000</sub>
	<hr>
	<form>	
		<center><label style="font-family: candara; font-size: 20px"> DONATION RECORD </label></center>
		<hr width="50%">
		<font style="font-face: arial"> <b>Money Donation Details </b></font>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM donation INNER JOIN donor ON donation.donor_id=donor.id where type = 'Money' ORDER BY donation.id ASC";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Name</th><th>Amount of Donation</th><th>Date of Acceptance</th><th>Date of Release</th><th>Spiritual Center Receiver</th><th>Foundation Receiver</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<td><p>";
					echo mysql_result($r, $i, 'donor.name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.donation_amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.date_received');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.date_released');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.receiver');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.foundation_receiver');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<br/>
			<font style="font-face: arial"><b> In-Kind Donation Details </b></font>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM donation INNER JOIN donor ON donation.donor_id=donor.id where type = 'In-Kind' ORDER BY donation.id ASC";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Name</th><th>In-Kind Donation</th><th>Date of Acceptance</th><th>Date of Release</th><th>Spiritual Center Receiver</th><th>Foundation Receiver</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<td><p>";
					echo mysql_result($r, $i, 'donor.name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.donation_item');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.date_received');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.date_released');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.receiver');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'donation.foundation_receiver');
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