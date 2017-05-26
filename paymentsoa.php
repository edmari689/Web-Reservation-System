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
	legend{
		background-color: #FF8040;
		color: #000000;	
		-moz-border-radius: 15px;
		border-radius: 15px;	
	}
	#wrapper{
		width:1350px;
		height:auto;
		position:relative;
	}
	</style>
</head>

	<script>
		function myFunction(){
			window.open("clientsPrint.php");
		}
	</script>
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
	<button onclick="myFunction()">Print this page</button>
	<form action='searchreservation.php' method='GET'>
		<input type='text' size='30' name='search' class="searchbar">
		<input type='submit' name='submit' value='Search'class="searchbutton" >
		<img src="search.png" class="search"/>
	</form>
	<?php
		$id = $_REQUEST['id'];
		$db = mysql_connect('localhost','root','root');
		mysql_select_db('sacredheart');
		
		$recPaid = "SELECT * FROM confirm_client INNER JOIN reservation ON confirm_client.id=reservation.client_id INNER JOIN confirmation ON reservation.id=confirmation.reserve_id INNER JOIN payment ON confirmation.id=payment.confirm_id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where confirm_client.id = '$id' and confirmation.payment_status = 'Paid'";
		$r = mysql_query($recPaid);
		$rows = mysql_num_rows($r);
		
		$retPaid = "SELECT * FROM confirm_client INNER JOIN reservation ON confirm_client.id=reservation.client_id INNER JOIN confirmation ON reservation.id=confirmation.reserve_id INNER JOIN payment ON confirmation.id=payment.confirm_id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where confirm_client.id = '$id' and confirmation.payment_status = 'Paid'";
		$r2 = mysql_query($retPaid);
		$rows2 = mysql_num_rows($r2);
		
		$recUnpaid = "SELECT * FROM confirm_client INNER JOIN reservation ON confirm_client.id=reservation.client_id INNER JOIN confirmation ON reservation.id=confirmation.reserve_id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where confirm_client.id = '$id' and confirmation.payment_status = 'Unpaid'";
		$r3 = mysql_query($recUnpaid);
		$rows3 = mysql_num_rows($r3);
		
		$retUnpaid = "SELECT * FROM confirm_client INNER JOIN reservation ON confirm_client.id=reservation.client_id INNER JOIN confirmation ON reservation.id=confirmation.reserve_id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where confirm_client.id = '$id' and confirmation.payment_status = 'Unpaid'";
		$r4 = mysql_query($retUnpaid);
		$rows4 = mysql_num_rows($r4);
		
		echo "<fieldset style='text-align:left; margin: left; -moz-border-radius: 15px; border-radius: 15px; border:solid 2px black;'>";
		echo "<table border='1'>";
		echo "<tr><th>Type of Event</th><th>Package Name</th><th>Package Amount</th><th>Check-In Date</th><th>Check-Out Date</th><th># of Guests</th><th>Payment Status</th><th>Package Name</th><th>Type of Event</th><th>Package Name</th><th>Type of Event</th></tr>";
		
		for($i=0; $i < $rows; $i++){
			echo "<tr><td><p>";
			echo mysql_result($r, $i, 'reservation.type');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'recollection_package.amount');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'reservation.checkin_date');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'reservation.checkout_date');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'confirmation.guest');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'confirmation.payment_status');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r, $i, 'recollection_package.service_name');
			echo "</p></td></tr>";
		}
		for($j=0; $j < $rows2; $j++){
			echo "<tr><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</p></td></tr>";
		}
		for($k=0; $k < $rows3; $k++){
			echo "<tr><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</p></td></tr>";
		}
		for($l=0; $l < $rows4; $l++){
			echo "<tr><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td><td><p>";
			echo mysql_result($r4, $l, 'retreat_package.service_name');
			echo "</p></td></tr>";
		}
		echo "<table>";
		echo "</fieldset>";
	?>
</div>
</body>
</html>