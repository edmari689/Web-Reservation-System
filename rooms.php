<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
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
	img.home{

		position: absolute;
		top: 8px;
		left: 75px;
	}
	img.logout{
		position: absolute;
		top: 45px;
		right: 135px;
	}
	h4.home{

		position: absolute;
		top: 83px;
		left: 83px;
		color: #FFFFFF;
		font-family: century gothic;
	}
	h4.logout{
		position: absolute;
		top: 23px;
		right: 60px;
		color: #FFFFFF;
		font-family: century gothic;
	}
	h4.logout:hover{

		color: #FF0000;
	}

	input.searchbar{

		position: absolute;
		top: 100px;
		right: 133px;
		-moz-border-radius: 9px;
		border-radius: 9px;
	}
	input.searchbutton{

		position: absolute;
		top: 100px;
		right: 70px;
		background-color: #000000;
		-moz-border-radius: 9px;
		border-radius: 9px;
		color: #FFFFFF;
	}
	img.search{

		position: absolute;
		top: 95px;
		right: 35px;

	}
	ul#menu, ul#menu ul.sub-menu {
    padding:0;
    margin: 0;
	}
	ul#menu li, ul#menu ul.sub-menu li {
    list-style-type: none;
    display: inline-block;
	}
	/*Link Appearance*/
	ul#menu li a, ul#menu li ul.sub-menu li a {
    text-decoration: none;
    color: #fff;
    background: #C11B17;
    padding: 13px;
    width: 100px;
    display:inline-block;
    font-family: century gothic;
	}
	/*Make the parent of sub-menu relative*/
	ul#menu li {
    position: relative;
	}
	/*sub menu*/
	ul#menu li ul.sub-menu {
    display:none;
    position: absolute;
    top: 30px;
    left: 0;
    width: 100px;
	}
	ul#menu li:hover ul.sub-menu {
    display:block;
    background-color: #000000;
	color: #000000;
	}
	fieldset.donation{
	-moz-border-radius: 15px;
	border-radius: 15px;
	border:solid 2px black;
	}
	fieldset.events{
	-moz-border-radius: 5px;
	border-radius: 5px;
	border:solid 2px black;
	background-color: #e5e4e2;
	}
	legend{
		font-family: verdana;
		background-color: #FF8040;
		color: #000000;
		-moz-border-radius: 15px;
		border-radius: 15px;
	}
	th{
		font-family: candara;
		font-size: 15px;
		width: 200px;
		background-color: #000000;
		color: #FFFFFF;

	}
	td{
		text-align: left;
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
			<img src="logout.png" class="logout"/>
			<a href="adminlog.php"> <h4 class="logout"> Sign Out </h4> </a>
		</div>
		<div style="height: 50px; background-color: #C11B17">
		<ul id="menu">
		<li>
			<img src="home.png" class="home"/><a href="admin.php">Home</a>
		</li>
		<li><a href="#">Records</a>
			<ul class="sub-menu">  
				<li>
					<a href="guest.php">Guest Records</a>
				</li> 
				<li>
					<a href="clients.php">Client Records</a>
				</li> 
			</ul>
		</li>    
		<li><a href="#">Reservations</a>
			<ul class="sub-menu">
				<li>
					<a href="confirmation.php"> Confirmations</a>
				</li>   
				<li>
					<a href="reservationdetails.php"> Reservation Records</a>
				</li>
				<li>
					<a href="reservationadmin.php"> Client Reservation</a>
				</li>
				<li>
					<a href="addreservations.php"> Add Reservation</a>
				</li> 
				<li>
					<a href="addguestPage.php">Add Guest</a>
				</li>   
				<li>
					<a href="addclientPage.php">Add Client</a>
				</li>     
			</ul>
		</li>
		<li>
			<a href="#">Rooms</a>
			<ul class="sub-menu"> 
				<li>
					<a href="rooms.php"> Rooms </a>
				</li>
				<li>
					<a href="roomprofile.php"> Room Profile </a>
				</li> 
				<li>
					<a href="roomadddetails.php"> Add / Update Room Details </a>
				</li>  			
			</ul>
		</li>
		<li><a href="#">Donation</a>
			<ul class="sub-menu">
				<li>
					<a href="donationadmin.php"> Donation Records</a>
				</li>   
				<li>
					<a href="donorProfile.php"> Donor Records</a>
				</li> 
				<li>
					<a href="addDonor.php"> Add Donation / Donor </a>
				</li>          
			</ul>
		</li>
		<li>
		<li><a href="#">Payment</a>
    	<ul class="sub-menu">
		<li>
               <a href="finalpayment.php"> Paid Payments </a>
        </li>
    	<li>
               <a href="payment.php"> Payment Records </a>
        </li>
		<li>
			   <a href="prepayment.php"> Reservation Payment Records</a>
        </li>
        </ul>
    </li>
    <li><a href="#">Services</a>
    	<ul class="sub-menu">
    	<li>
               <a href="service.php"> Service Rates </a>
        </li>
		<li>
               <a href="updateservicePage.php"> Update Rates </a>
        </li>
		<li>
               <a href="addrates.php"> Add Package Rates </a>
        </li>
        </ul>
    </li>
		</ul>
		</div>
		<br/>
	<fieldset class='events' style="float: right">
	<legend> Today's Event </legend>	
	<?php
	$db = mysql_connect('localhost','root','root');
	mysql_select_db('sacredheart');
	$query = mysql_query("SELECT * FROM confirmation INNER JOIN reservation ON confirmation.reserve_id=reservation.id where now() between checkin_date and checkout_date");
	$rows = mysql_num_rows($query);
	echo "<table border='0'>";
	for($i=0; $i < $rows; $i++){
		echo "<tr><th>Client's Name</th></tr>";
		echo "<tr><td><p>";
		echo mysql_result($query, $i, 'confirmation.client_name');
		echo "</p></td></tr><br/>";
		echo "<tr><th>Checkin Date</th></tr><tr><td><p>";
		echo mysql_result($query, $i, 'reservation.checkin_date');
		echo "</p></td></tr><br/>";
		echo"<tr><th>Checkout Date</th></tr><tr><td><p>";
		echo mysql_result($query, $i, 'reservation.checkout_date');
		echo "</p></td><br /><td><p>";
		echo"<tr><th>Event</th></tr><tr><td><p>";
		echo mysql_result($query, $i, 'reservation.type');
		echo "</p></td></tr>";
	}
	echo "</table>";
	mysql_close($db);
	?>
	</fieldset>
		<?php
		$db = mysql_connect('localhost','root','root');
		mysql_select_db('sacredheart');
		
		$close_event = mysql_query("SELECT * FROM reservation INNER JOIN confirmation ON confirmation.reserve_id=reservation.id where now() between reservation.checkin_date and reservation.checkout_date");
		$row = mysql_fetch_row($close_event);
		$now = mysql_query("SELECT now()");
		$guest_out = mysql_query("SELECT * FROM guest_room_usage");
		$rowx = mysql_num_rows($guest_out);
		
		if($row[2] < $now)
		{
			for($a=0; $a < $rowx; $a++)
			{
				$empty = "UPDATE room_details set status='Empty' where status != 'Inactive'";
				mysql_query($empty);
		
				$checking_confirmation= mysql_query("SELECT * FROM checkout where confirm_id = '".mysql_result($guest_out, $a, 'confirm_id')."'");
				$row = mysql_fetch_row($checking_confirmation);
		
				if($row[3] == mysql_result($guest_out, $a, 'confirm_id'))
				{
					$scan_checkout= mysql_query("Select * from checkout where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."'");
					if(mysql_num_rows($scan_checkout) > 0)
					{
						$updateCheckout = "UPDATE checkout set room_no=(select room_no from guest_room_usage where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."') where guest_no='".mysql_result($guest_out, $a, 'guest_no')."' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
						mysql_query($updateCheckout);
			
						$updateCheckout = "UPDATE checkout set checkout_date=now() where guest_no='".mysql_result($guest_out, $a, 'guest_no')."' and confirm_id='".mysql_result($guest_out, $a, 'confirm_id')."'";
						mysql_query($updateCheckout);
			
						$after = "DELETE FROM guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'";
						mysql_query($after);
					}
					else
					{
						$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
						VALUES((select room_no from guest_room_usage where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."'), '".mysql_result($guest_out, $a, 'guest_no')."', 
						(select confirm_id from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'),
						(select checkin_date from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'), now())";
						mysql_query($before);
			
						$after = "DELETE FROM guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'";
						mysql_query($after);
					}
				}
				else
				{
					$before = "INSERT INTO checkout(room_no, guest_no, confirm_id, checkin_date, checkout_date) 
					VALUES((select room_no from guest_room_usage where guest_no = '".mysql_result($guest_out, $a, 'guest_no')."'), '".mysql_result($guest_out, $a, 'guest_no')."', 
					(select confirm_id from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'),
					(select checkin_date from guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'), now())";
					mysql_query($before);
			
					$after = "DELETE FROM guest_room_usage where guest_no='".mysql_result($guest_out, $a, 'guest_no')."'";
					mysql_query($after);
				}
			}
		}
		
		$query = "SELECT * FROM room_details where status != 'Inactive' ORDER BY room_no ASC";
		$r = mysql_query($query);
		$rows = mysql_num_rows($r);
		$query2 = "SELECT * FROM checkout INNER JOIN guest ON checkout.guest_no=guest.id INNER JOIN confirmation ON checkout.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id where now() between reservation.checkin_date and reservation.checkout_date ORDER BY checkout.checkout_date ASC";
		$r2 = mysql_query($query2);
		$rows2 = mysql_num_rows($r2);
		$query3 = "SELECT * FROM guest_room_usage INNER JOIN guest ON guest_room_usage.guest_no=guest.id INNER JOIN confirmation ON guest_room_usage.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id where now() between reservation.checkin_date and reservation.checkout_date ORDER BY guest_room_usage.checkin_date ASC";
		$r3 = mysql_query($query3);
		$rows3 = mysql_num_rows($r3);
		
		echo "<div style='overflow: auto; height:475x; width:325px; float: left;'>";
		echo "<fieldset style='text-align:left; margin: left; float:left;' class='donation'>";
		echo "<legend> List of Rooms </legend>";
		echo " <a href='checkoutAll.php'> Check-Out All </a>";		
		echo "<table border='0' style='float: left'>";
		echo "<tr><th>Room No.</th><th>Room Status</th><th>Capacity</th></tr>";
		for($i=0; $i < $rows; $i++)
		{
			echo "<tr><td><p>";
			echo "<a href='room.php? room_no=";
			echo mysql_result($r, $i, 'room_no');
			echo "'>Room ".mysql_result($r, $i, 'room_no')."</a>";
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'status');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'capacity');
			echo "</p></td></tr>";
		}
		echo "</table>";
		echo "</fieldset>";
		echo "</div>";
		echo "<div style='overflow: auto; height :200px; width:780px; float:center;'>";
		echo "<fieldset style='text-align:left; margin: left; float:center;' class='donation'>";
		echo "<legend> Check-In Guests </legend>";
		echo "<table border='0' style='float: left'>";
		echo "<tr><th>Room No.</th><th>Guest Name</th><th>Check-In Date</th></tr>";
		for($h=0; $h < $rows3; $h++)
		{
			echo "<tr><td><p>Room ";
			echo mysql_result($r3, $h, 'room_no');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $h, 'guest.name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $h, 'checkin_date');
			echo "</p></td></tr>";
		}
		echo "</table>";
		echo "</fieldset>";
		echo "</div>";
		echo "<div style='overflow: auto; height :300px; width:780px; float:center;'>";
		echo "<fieldset style='text-align:left; margin: left; float:center;' class='donation'>";
		echo "<legend> Check-Out Guests </legend>";
		echo "<table border='0' style='float: left'>";
		echo "<tr><th>Room No.</th><th>Guest Name</th><th>Check-In Date</th><th>Check-Out Date</th></tr>";
		for($j=0; $j < $rows2; $j++)
		{
			echo "<tr><td><p>Room ";
			echo mysql_result($r2, $j, 'room_no');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'guest.name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'checkin_date');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'checkout_date');
			echo "</p></td></tr>";
		}
		echo "</table>";
		echo "</fieldset>";
		echo "</div>";
	?>
</body>
</html>