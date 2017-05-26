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
	fieldset.reservation, fieldset.cancel{
	-moz-border-radius: 15px;
	border-radius: 15px;
	border:solid 2px black;
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
	button{
		float: right;
		-moz-border-radius: 7px;
		border-radius: 7px;
		border:solid 1.5px black;
		padding: 3px;
		background-color: #4AA02C;
	}
	#wrapper{
		width:1350px;
		height:auto;
		position:relative;
	}
	</style>

	
<script>
function myFunction()
{
window.open("reservationdetailsPrint.php");
}
</script>
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
		<form action='searchreservation.php' method='GET'>
			<input type='text' size='30' name='search' class="searchbar">
			<input type='submit' name='submit' value='Search'class="searchbutton" >
			<img src="search.png" class="search"/>
		</form>
	<br/>
	<button onclick="myFunction()">Print this page</button>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				echo "<fieldset style='text-align:left; margin: left;' class='reservation'>";
				echo "<legend> Pending Reservation Details </legend>";
				//<div id="middlerecord" class="scroll" style="float:center;"></div>
				$recollection = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where reservation.status = 'Pending' and reservation.type = 'Recollection' ORDER BY reservation.id ASC";
				$rRec = mysql_query($recollection);
				$rowsRec = mysql_num_rows($rRec);
				echo "<h4>Recollection Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Recollection Package</th><th>Status</th></tr>";
				for($x=0; $x < $rowsRec; $x++){
					echo "<td><p>";
					echo mysql_result($rRec, $x, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($rRec, $x, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($rRec, $x, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($rRec, $x, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($rRec, $x, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($rRec, $x, 'recollection_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($rRec, $x, 'reservation.status');
					echo "</p></td><td><p>";
					echo "<a href='verify.php? id=";
					echo mysql_result($rRec, $x, 'id');
					echo "'>Confirm</a>";
					echo "</p></td><td><p>";
					echo "<a href='beforecancel.php? id=";
					echo mysql_result($rRec, $x, 'id');
					echo "'>Cancel</a>";
					echo "</p></td></tr>";
				}
				echo "</table>";
				$retreat = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.status = 'Pending' and reservation.type = 'Retreat' ORDER BY reservation.id ASC";
				$rRet = mysql_query($retreat);
				$rowsRet = mysql_num_rows($rRet);
				echo "<h4>Retreat Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Retreat Package</th><th>Status</th></tr>";
				for($y=0; $y < $rowsRet; $y++){
					echo "<td><p>";
					echo mysql_result($rRet, $y, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($rRet, $y, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($rRet, $y, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($rRet, $y, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($rRet, $y, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($rRet, $y, 'retreat_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($rRet, $y, 'reservation.status');
					echo "</p></td><td><p>";
					echo "<a href='verify.php? id=";
					echo mysql_result($rRet, $y, 'id');
					echo "'>Confirm</a>";
					echo "</p></td><td><p>";
					echo "<a href='beforecancel.php? id=";
					echo mysql_result($rRet, $y, 'id');
					echo "'>Cancel</a>";
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "</fieldset>";
				echo "<br/>";
				echo "<fieldset style='text-align:left; margin: left;' class='reservation'>";
				echo "<legend> Upcoming Confirmed Reservation Details </legend>";
				$query2 = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where reservation.status = 'Confirmed' and reservation.checkin_date > now() and reservation.type = 'Recollection' ORDER BY reservation.id ASC";
				$r2 = mysql_query($query2);
				$rows2 = mysql_num_rows($r2);
				$query2i = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.status = 'Confirmed' and reservation.checkin_date > now() and reservation.type = 'Retreat' ORDER BY reservation.id ASC";
				$r2i = mysql_query($query2i);
				$rows2i = mysql_num_rows($r2i);
				echo "<h4>Recollection Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Recollection Package</th><th>Status</th></tr>";
				for($i2=0; $i2 < $rows2; $i2++){
					echo "<td><p>";
					echo mysql_result($r2, $i2, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $i2, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $i2, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $i2, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $i2, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $i2, 'recollection_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $i2, 'reservation.status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "<h4>Retreat Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Retreat Package</th><th>Status</th></tr>";
				for($i2i=0; $i2i < $rows2i; $i2i++){
					echo "<td><p>";
					echo mysql_result($r2i, $i2i, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r2i, $i2i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2i, $i2i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2i, $i2i, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r2i, $i2i, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r2i, $i2i, 'retreat_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r2i, $i2i, 'reservation.status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "</fieldset>";
				echo "<br/>";
				echo "<fieldset style='text-align:left; margin: left;' class='reservation'>";
				echo "<legend> Ongoing Confirmed Reservation Details </legend>";
				$query3 = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where reservation.status = 'Confirmed' and reservation.checkin_date < now() and reservation.checkout_date > now() and reservation.type = 'Recollection' ORDER BY reservation.id ASC";
				$r3 = mysql_query($query3);
				$rows3 = mysql_num_rows($r3);
				$query3i = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.status = 'Confirmed' and reservation.checkin_date < now() and reservation.checkout_date > now() and reservation.type = 'Retreat' ORDER BY reservation.id ASC";
				$r3i = mysql_query($query3i);
				$rows3i = mysql_num_rows($r3i);
				echo "<h4>Recollection Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Recollection Package</th><th>Status</th></tr>";
				for($i3=0; $i3 < $rows3; $i3++){
					echo "<td><p>";
					echo mysql_result($r3, $i3, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $i3, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $i3, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $i3, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $i3, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $i3, 'recollection_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $i3, 'reservation.status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "<h4>Retreat Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Retreat Package</th><th>Status</th></tr>";
				for($i3i=0; $i3i < $rows3i; $i3i++){
					echo "<td><p>";
					echo mysql_result($r3i, $i3i, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r3i, $i3i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r3i, $i3i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r3i, $i3i, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r3i, $i3i, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r3i, $i3i, 'retreat_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r3i, $i3i, 'reservation.status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "</fieldset>";
				echo "<br/>";
				echo "<fieldset style='text-align:left; margin: left;' class='reservation'>";
				echo "<legend> Past Events Details </legend>";
				$query4 = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where reservation.checkout_date < now() and reservation.status = 'Confirmed' and reservation.type = 'Recollection' ORDER BY reservation.id ASC";
				$r4 = mysql_query($query4);
				$rows4 = mysql_num_rows($r4);
				$query4i = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.checkout_date < now() and reservation.status = 'Confirmed' and reservation.type = 'Retreat' ORDER BY reservation.id ASC";
				$r4i = mysql_query($query4i);
				$rows4i = mysql_num_rows($r4i);
				echo "<h4>Recollection Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Recollection Package</th></tr>";
				for($i4=0; $i4 < $rows4; $i4++){
					echo "<td><p>";
					echo mysql_result($r4, $i4, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r4, $i4, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r4, $i4, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r4, $i4, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r4, $i4, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r4, $i4, 'recollection_package.service_name');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "<h4>Retreat Reservations</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Client Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th><th>Retreat Package</th></tr>";
				for($i4i=0; $i4i < $rows4i; $i4i++){
					echo "<td><p>";
					echo mysql_result($r4i, $i4i, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r4i, $i4i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r4i, $i4i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r4i, $i4i, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r4i, $i4i, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r4i, $i4i, 'retreat_package.service_name');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "</fieldset>";
				mysql_close($db);
			?>	
</div>
</body>
</html>