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
	</head>
	<body>
	<?php
				$id = $_REQUEST['id'];
				$server = $_SERVER['PHP_SELF'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				
				$query = "SELECT * FROM confirmation INNER JOIN reservation ON confirmation.reserve_id=reservation.id where confirmation.id = '$id' ORDER BY confirmation.id ASC";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				
				$sql = "Select * from running_amount where confirm_id = '$id'";
				$run = mysql_query($sql);
				$rows6 = mysql_num_rows($run);
				
				$balance_ret = "SELECT running_amount.total - sum(balance) as balance, sum(balance) as sum, sum(balance) - running_amount.total as changer FROM transaction INNER JOIN confirmation ON confirmation.id=transaction.confirm_id INNER JOIN running_amount ON confirmation.id=running_amount.confirm_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where transaction.confirm_id = '$id'";
				$get = mysql_query($balance_ret);
				$show = mysql_num_rows($get);
				
				$balance_rec = "SELECT running_amount.total - sum(balance) as balance, sum(balance) as sum, sum(balance) - running_amount.total as changer FROM transaction INNER JOIN confirmation ON confirmation.id=transaction.confirm_id INNER JOIN running_amount ON confirmation.id=running_amount.confirm_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where transaction.confirm_id = '$id'";
				$get2 = mysql_query($balance_rec);
				$show2 = mysql_num_rows($get2);
				
				echo "<fieldset style='text-align:left; margin: left; -moz-border-radius: 15px; border-radius: 15px; border:solid 2px black;'>";
				echo "<legend> Payment Form </legend>";
				echo "<div id='middlerecord' class='scroll' style='float:center;'>";
				echo "<form name='endtransaction' action='endtransaction.php'>";
				
				for($i=0; $i < $rows; $i++){
					if(mysql_result($r, $i, 'reservation.type') == 'Retreat')
					{
						$query2 = "SELECT *,(confirmation.guest * retreat_package.amount) as guestcount, (1 + day(checkout_date) - day(checkin_date)) as overall, ((confirmation.guest * retreat_package.amount) * (1 + day(checkout_date) - day(checkin_date))) as total FROM confirmation INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where confirmation.id = '$id' ORDER BY confirmation.id ASC";
						$r2 = mysql_query($query2);
						$rows2 = mysql_num_rows($r2);
						
						$retreat = "SELECT * FROM transaction INNER JOIN confirmation ON confirmation.id=transaction.confirm_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where transaction.confirm_id = '$id'";
						$ret = mysql_query($retreat);
						$rows4 = mysql_num_rows($ret);
						for($j=0; $j < $rows2; $j++){					
							if(mysql_num_rows($run)> 0)
							{
							}
							else
							{
								$query = "INSERT INTO running_amount(total, confirm_id) 
								VALUES('".mysql_result($r2, $j, 'total')."', '$id')";
								mysql_query($query);
							}
							echo "<table border='0' style='float: left;'>";
							echo "<tr><td><p>Client's Page</p></td>";
							echo "<td><input type='text' name='client_name' id='client_name' value='";
							echo mysql_result($r2, $j, 'confirmation.client_name');
							echo "'readonly></td></tr>";
							echo "<tr><td><p>Package Name</p></td>";
							echo "<td><input type='text' name='package_name' id='package_name' value='";
							echo mysql_result($r2, $j, 'retreat_package.service_name');
							echo "'readonly></td></tr>";
							echo "<tr><td><p>Package Amount</p></td>";
							echo "<td><input type='text' name='package_amount' id='package_amount' value='";
							echo mysql_result($r2, $j, 'retreat_package.amount');
							echo "'readonly></td></tr>";
							echo "<tr><td><p># of Guests</p></td>";
							echo "<td><input type='text' name='guest' id='guest' value='";
							echo mysql_result($r2, $j, 'confirmation.guest');
							echo "'readonly></td></tr>";
							echo "<tr><td><p>Subtotal</p></td>";
							echo "<td><input type='text' name='subtotal' id='subtotal' value='";
							echo mysql_result($r2, $j, 'guestcount');
							echo "'readonly></td></tr>";
							echo "<tr><td><p># of Days</p></td>";
							echo "<td><input type='text' name='day' id='day' value='";
							echo mysql_result($r2, $j, 'overall');
							echo "'readonly></td></tr>";
							for($d=0; $d < $rows6; $d++){
								echo "<tr><td><p>Total</p></td>";
								echo "<td><input type='text' name='total' id='total' value='";
								echo mysql_result($run, $d, 'total');
								echo "'readonly></td></tr>";
							}
							for($g=0; $g < $show; $g++){
								echo "<tr><td><p>Balance</p></td>";
								echo "<td><input type='text' name='balance' id='balance' value='";
								echo mysql_result($get, $g, 'balance');
								echo "'readonly></td></tr>";
								echo "<tr>";
								echo "<td><input type='hidden' name='sum' id='sum' value='";
								echo mysql_result($get, $g, 'sum');
								echo "'readonly></td></tr>";
								echo "<tr>";
								echo "<td><input type='hidden' name='changer' id='changer' value='";
								echo mysql_result($get, $g, 'changer');
								echo "'readonly></td></tr>";
							}
							echo "</table>";
							
							echo "<table border='1'>";
							echo "<tr><th>Date</th><th>Amount Paid</th><th>Handler's Name</th></tr>";
							for($a=0; $a < $rows4; $a++){
								echo "<tr><td><p>";
								echo mysql_result($ret, $a, 'transaction.date');
								echo "</p></td><td><p>";
								echo mysql_result($ret, $a, 'transaction.balance');
								echo "</p></td><td><p>";
								echo mysql_result($ret, $a, 'transaction.admin_name');
								echo "</p></td></tr>";
							}
							echo "</table>";
						}
					}
					else
					{
						$query3 = "SELECT *, (confirmation.guest * recollection_package.amount) as total FROM confirmation INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where confirmation.id = '$id' ORDER BY confirmation.id ASC";
						$r3 = mysql_query($query3);
						$rows3 = mysql_num_rows($r3);
						
						$recollection = "SELECT * FROM transaction INNER JOIN confirmation ON confirmation.id=transaction.confirm_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where transaction.confirm_id = '$id'";
						$rec = mysql_query($recollection);
						$rows5 = mysql_num_rows($rec);
						for($k=0; $k < $rows3; $k++){
							if(mysql_num_rows($run)> 0)
							{
							}
							else
							{
								$query = "INSERT INTO running_amount(total, confirm_id) 
								VALUES('".mysql_result($r3, $k, 'total')."', '$id')";
								mysql_query($query);
							}
							echo "<table border='0' style='float: left;'>";
							echo "<tr><td><p>Client's Page</p></td>";
							echo "<td><input type='text' name='client_name' id='client_name' value='";
							echo mysql_result($r3, $k, 'confirmation.client_name');
							echo "'readonly></td></tr>";
							echo "<tr><td><p>Package Name</p></td>";
							echo "<td><input type='text' name='package_name' id='package_name' value='";
							echo mysql_result($r3, $k, 'recollection_package.service_name');
							echo "'readonly></td></tr>";
							echo "<tr><td><p>Package Amount</p></td>";
							echo "<td><input type='text' name='package_amount' id='package_amount' value='";
							echo mysql_result($r3, $k, 'recollection_package.amount');
							echo "'readonly></td></tr>";
							echo "<tr><td><p># of Guests</p></td>";
							echo "<td><input type='text' name='guest' id='guest' value='";
							echo mysql_result($r3, $k, 'confirmation.guest');
							echo "'readonly></td></tr>";
							for($d=0; $d < $rows6; $d++){
								echo "<tr><td><p>Total</p></td>";
								echo "<td><input type='text' name='total' id='total' value='";
								echo mysql_result($run, $d, 'total');
								echo "'readonly></td></tr>";
							}
							for($h=0; $h < $show2; $h++){
								echo "<tr><td><p>Balance</p></td>";
								echo "<td><input type='text' name='balance' id='balance' value='";
								echo mysql_result($get2, $h, 'balance');
								echo "'readonly></td></tr>";
								echo "<tr>";
								echo "<td><input type='hidden' name='sum' id='sum' value='";
								echo mysql_result($get2, $h, 'sum');
								echo "'readonly></td></tr>";
								echo "<tr>";
								echo "<td><input type='hidden' name='changer' id='changer' value='";
								echo mysql_result($get2, $h, 'changer');
								echo "'readonly></td></tr>";
							}
							echo "</table>";
							
							echo "<table border='1'>";
							echo "<tr><th>Date</th><th>Amount Paid</th><th>Handler's Name</th></tr>";
							for($b=0; $b < $rows5; $b++){
								echo "<tr><td><p>";
								echo mysql_result($rec, $b, 'transaction.date');
								echo "</p></td><td><p>";
								echo mysql_result($rec, $b, 'transaction.balance');
								echo "</p></td><td><p>";
								echo mysql_result($rec, $b, 'transaction.admin_name');
								echo "</p></td></tr>";
							}
							echo "</table>";
						}
					}
				}
				echo "</form>";	
				echo "</div>";
				echo "</fieldset>";
				mysql_close($db);
			?>	
		<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>" />
		<center> <label> This serves as your official receipt. </label></center>
		<center><u><p onclick="myFunction()"> Print </p></u></center>
	</body>
</html>