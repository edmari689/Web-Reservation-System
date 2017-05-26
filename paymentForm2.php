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
	ul#menu li a, ul#menu li ul.sub-menu li a {
 	   	text-decoration: none;
	    color: #fff;
	    background: #C11B17;
	    padding: 13px;
	    width: 100px;
	    display:inline-block;
	    font-family: century gothic;
	}
	ul#menu li {
	    position: relative;
	}
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
	fieldset{
		-moz-border-radius: 15px;
		border-radius: 15px;
		border:solid 2px black;
		width: 380px;
	}
	legend{
		font-family: verdana;
		background-color: #FF8040;
		color: #000000;
		-moz-border-radius: 15px;
		border-radius: 15px;
	}
	td{
		font-family: century gothic;
		text-align: left;
	}
	#wrapper{
		width:1350px;
		height:auto;
		position:relative;
	}
	button{
		float: right;
		-moz-border-radius: 7px;
		border-radius: 7px;
		border:solid 1.5px black;
		padding: 3px;
		background-color: #4AA02C;
	}
	</style>
	<script>
	function myFunction(){
		window.open("paymentForm2Print.php");
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
    		<li><a href="#">Rooms</a>
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
    		<li><a href="#">Payment</a>
    			<ul class="sub-menu">
    			<li>
               		<a href="payment.php"> Payment Records </a>
        		</li>
				<li>
               		<a href="prepayment.php"> Reservation Payment Records</a>
        		</li>
				<li>
               		<a href="addpaymentPage.php"> Add Payment </a>
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
        		</ul>
    		</li>
		</ul>
	</div>
	<br/>
	<button onclick="myFunction()"> Print this page </button>
		<form name='transact' action='transact.php'>
			<?php
				$id = $_REQUEST['id'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				
				echo "<fieldset style='text-align:left; margin: left; -moz-border-radius: 15px; border-radius: 15px; border:solid 2px black;'>";
				echo "<legend> Payment Form </legend>";
				echo "<div id='middlerecord' class='scroll' style='float:center;'>";
				
				$checkin = "SELECT * FROM guest_room_usage INNER JOIN guest ON guest_room_usage.guest_no=guest.id INNER JOIN confirmation ON guest_room_usage.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where now() between reservation.checkin_date and reservation.checkout_date and confirmation.id = '$id' ORDER BY guest_room_usage.checkin_date ASC";
				$in = mysql_query($checkin);
				$rows3 = mysql_num_rows($in);	
				
				$retreat = "SELECT *, (1 + day(checkout.checkout_date) - day(checkout.checkin_date)) as daycount, (1 + day(checkout.checkout_date) - day(checkout.checkin_date)) * retreat_package.amount as actual_amount FROM checkout INNER JOIN guest ON checkout.guest_no=guest.id INNER JOIN confirmation ON checkout.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where now() between reservation.checkin_date and reservation.checkout_date and confirmation.id = '$id' ORDER BY checkout.checkout_date ASC";
				$ret = mysql_query($retreat);
				$rows4 = mysql_num_rows($ret);				
				
				$checkout_count = "SELECT count(checkout.guest_no) as go_count FROM checkout INNER JOIN guest ON checkout.guest_no=guest.id INNER JOIN confirmation ON checkout.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where now() between reservation.checkin_date and reservation.checkout_date and confirmation.id = '$id' ORDER BY checkout.checkout_date ASC";
				$count = mysql_query($checkout_count);
				$rows5 = mysql_num_rows($count);		
				
				$total = 0;
				echo "<h4>Check-In Guest</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Guest Name</th><th>Check-In Date</th><th>Check-Out Date</th><th># of Nights</th></tr>";
				for($v=0; $v < $rows3; $v++){
					echo "<tr><td><p>";
					echo mysql_result($in, $v, 'guest.name');
					echo "</p></td><td><p>";
					echo mysql_result($in, $v, 'guest_room_usage.checkin_date');
					echo "</p></td><td><p>";
					echo "</p></td><td><p>N/A</p></td></tr>";
				}
				echo "</table>";
				echo "<h4>Check-Out Guest</h4>";
				echo "<table border='1'>";
				echo "<tr><th>Guest Name</th><th>Check-In Date</th><th>Check-Out Date</th><th># of Nights</th></tr>";
				for($a=0; $a < $rows4; $a++){
					echo "<tr><td><p>";
					echo mysql_result($ret, $a, 'guest.name');
					echo "</p></td><td><p>";
					echo mysql_result($ret, $a, 'checkout.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($ret, $a, 'checkout.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($ret, $a, 'daycount');
					echo "</p></td></tr>";
					$total = $total + mysql_result($ret, $a, 'actual_amount');
				}
				echo "</table>";
				echo "<table border='0'>";
				echo "<tr><td><p>Actual Total</p></td>";
				echo "<td><input type='text' name='actual_total' id='actual_total' value='$total' readonly></td></tr>";
				echo "</table>";
				
				echo "<table border='0'>";
				for($c=0; $c < $rows5; $c++){
					echo "<tr><td><input type='hidden' name='guest_count' id='guest_count' value='".mysql_result($count, $c, 'go_count')."' readonly></td></tr>";
				}
				echo "</table>";
				echo "<table border='0'>";
				echo "<tr><td><input type='submit' value='Close Transaction' /></td></tr>";
				echo "</table>";
				echo "</div>";
				echo "</fieldset>";
				mysql_close($db);
			?>	
			<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>" />
		</form>
	</div>		
</body>
</html>	