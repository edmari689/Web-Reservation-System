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
	fieldset.donation{
		width: 500px;
		margin:auto;
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
	<form action='searchreservation.php' method='GET'>
			<input type='text' size='30' name='search' class="searchbar">
			<input type='submit' name='submit' value='Search'class="searchbutton" >
			<img src="search.png" class="search"/>
	</form>	
	<fieldset style="text-align:left; margin: left;" class="cancel">
		<legend> Reservation Expected Balance Details for Recollection </legend>
		<div id="middlerecord" class="scroll" style="float:center;">
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (reservation.guest * recollection_package.amount) as accumulated_amount FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id INNER JOIN confirmation ON confirmation.reserve_id=reservation.id where reservation.type='recollection' and confirmation.payment_status = 'Unpaid'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1' align='center'>";
				echo "<tr><th>Client's Name</th><th>Number of Guests</th><th>Check-In Date</th><th>Check-Out Date</th><th>Package Name</th><th>Amount of Package</th><th>Total Amount</th><th>Payment Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'recollection_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'recollection_package.amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'accumulated_amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'confirmation.payment_status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
		</div>
	</fieldset>	
	<br/>
	<fieldset style="text-align:left; margin: left;" class="cancel">
		<legend> Reservation Expected Balance Details for Retreat </legend>
		<div id="middlerecord" class="scroll" style="float:center;">
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (reservation.guest * retreat_package.amount) as accumulated_amount, ((reservation.guest * retreat_package.amount) * (1 + day(checkout_date) - day(checkin_date))) as overall FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id INNER JOIN confirmation ON confirmation.reserve_id=reservation.id where reservation.type='retreat' and confirmation.payment_status = 'Unpaid'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1' align='center'>";
				echo "<tr><th>Client's Name</th><th>Number of Guests</th><th>Check-In Date</th><th>Check-Out Date</th><th>Package Name</th><th>Amount of Package</th><th>Accumulated Amount (Per Day)</th><th>Total Amount (# of Days)</th><th>Payment Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'retreat_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'retreat_package.amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'accumulated_amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'overall');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'confirmation.payment_status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
		</div>
	</fieldset>	
</div>
</body>
</html>