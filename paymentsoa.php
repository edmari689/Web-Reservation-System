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
		$room_no = $_REQUEST['room_no'];
		$db = mysql_connect('localhost','root','root');
		mysql_select_db('sacredheart');
		
		$query = "SELECT room_no FROM room_details where room_no = '$room_no'";
		$r = mysql_query($query);
		$rows = mysql_num_rows($r);
		
		for($i=0; $i < $rows; $i++)
		{
			echo "<fieldset style='text-align:left; margin: left; float:left;' class='donation'>";
			echo "<legend> Room ";
			echo mysql_result($r, $i, 'room_no');
			echo "</legend>";
			
			$query4 = "SELECT * FROM guest_room_usage INNER JOIN guest ON guest_room_usage.guest_no=guest.id INNER JOIN room_details ON guest_room_usage.room_no=room_details.room_no INNER JOIN confirmation ON guest_room_usage.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id WHERE now() between reservation.checkin_date and reservation.checkout_date and guest_room_usage.room_no='$room_no'";
			$r4 = mysql_query($query4);
			$rows4 = mysql_num_rows($r4);
			echo "<table border='0' style='float: left'>";
			echo "<tr><th>Guest Name</th><th>Sex</th><th>Check-In Date</th><th colspan = '2'>Actions</th></tr>";
			for($l=0; $l < $rows4; $l++){
				echo "<td><p>";
				echo mysql_result($r4, $l, 'guest.name');
				echo "</p></td><td><p>";
				echo mysql_result($r4, $l, 'guest.sex');
				echo "</p></td><td><p>";
				echo mysql_result($r4, $l, 'guest_room_usage.checkin_date');
				echo "</p></td><td><p>";
				echo "<a href='beforetransfer.php? id=";
				echo mysql_result($r4, $l, 'id');
				echo "'>Transfer Room</a>";
				echo "</p></td><td><p>";
				echo "<a href='beforecheckout.php? id=";
				echo mysql_result($r4, $l, 'id');
				echo "'>Check-Out</a>";
				echo "</p></td></tr>";
			}
			echo "</table>";
			echo "</fieldset>";
		}
	?>
	
</div>
</body>
</html>