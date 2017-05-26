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
		function validateForm(form)
			{
				if (form.confirm_name.value == "") {
					alert ("No Confirm Name was entered");
					return false;
				}
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
	<fieldset style="text-align:left; margin: left; -moz-border-radius: 15px; border-radius: 15px; border:solid 2px black;" class="donation">
		<legend> Confirmation Form </legend> 
		<form name="addconfirmation" action="addconfirmation.php" onsubmit="return validateForm(this)" method = "POST"> 	
		<div id="middlerecord" class="scroll" style="float:center;">
			<?php
				$id = $_REQUEST['id'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id where reservation.id='$id'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				for($i=0; $i < $rows; $i++){
					if(mysql_result($r, $i, 'reservation.type') == 'Recollection')
					{
						$query2 = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where reservation.id='$id'";
					}
					else
					{
						$query2 = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.id='$id'";
					}
					$r2 = mysql_query($query2);
					$rows2 = mysql_num_rows($r2);
					for($j=0; $j < $rows2; $j++){
						echo "<table border='0'>";
						echo "<tr><th class='gray'>Reservation ID</th><th class='gray'>Check-In Date</th><th class='gray'>Check-Out Date</th><th class='black'>Number of Guests (You may change it)</th><th class='gray'>Type of Reservation</th><th class='gray'>Package Name</th><th class='gray'>Status</th><th class='gray'>Client's Name</th><th class='gray'>Client's Email</th><th class='black'>Confirmed By</th></tr>";
						echo "<tr><td><input type='text' size=2 name='reserve_id' id='reserve_id' value='";
						echo mysql_result($r2, $j, 'reservation.id');
						echo "' readonly></td><td><input type='text' size=17 value='";
						echo mysql_result($r2, $j, 'reservation.checkin_date');
						echo "' readonly></td><td><input type='text' size=17 value='";
						echo mysql_result($r2, $j, 'reservation.checkout_date');
						echo "' readonly></td><td><input type='text' name='guest' id='guest' size=2 value='";
						echo mysql_result($r2, $j, 'reservation.guest');
						echo "'></td><td><input type='text' name='type' id='type' size=11 value='";
						echo mysql_result($r2, $j, 'reservation.type');
						echo "' readonly></td>";
						if(mysql_result($r, $i, 'reservation.type') == 'Recollection')
						{
							echo "<td><input type='text' name='recollection_name' id='recollection_name' value='";
							echo mysql_result($r2, $j, 'recollection_package.service_name');
							echo "' readonly></td>";
						}
						else
						{
							echo "<td><input type='text' name='retreat_name' id='retreat_name' value='";
							echo mysql_result($r2, $j, 'retreat_package.service_name');
							echo "' readonly></td>";
						}
						echo "<td><input type='text' size=6 value='";
						echo mysql_result($r2, $j, 'reservation.status');
						echo "' readonly></td><td><input type='text' name='client_name' id='client_name' value='";
						echo mysql_result($r2, $j, 'confirm_client.name');
						echo "' readonly></td><td><input type='text' name='email' id='email' value='";
						echo mysql_result($r2, $j, 'confirm_client.email');
						echo "' readonly></td>";
						echo "<td><input type='text' name='confirm_name' id='confirm_name' value=''></td></tr> ";
						echo "</table>";
						if(mysql_result($r, $i, 'reservation.type') == 'Recollection')
						{
							echo "<td><input type='hidden' name='recollection_id' id='recollection_id' value='";
							echo mysql_result($r2, $j, 'reservation.recollection_id');
							echo "' readonly></td>";
						}
						else
						{
							echo "<td><input type='hidden' name='retreat_id' id='retreat_id' value='";
							echo mysql_result($r2, $j, 'reservation.retreat_id');
							echo "' readonly></td>";
						}
					}
				}
				mysql_close($db);
			?>	
			<h4>Are you sure want to confirm?</h4>
			<table align="left">
				<td><input type = "submit" value="Yes"/> </td></form>
				<form name="back" action="reservationdetails.php"><td><input type = "submit" value="No"/> </td></form>
			</table>
			<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>" />
			<input type="hidden" id="recollection_id" name="recollection_id" value="<?php echo $_REQUEST['recollection_id']; ?>" />
			<input type="hidden" id="retreat_id" name="retreat_id" value="<?php echo $_REQUEST['retreat_id']; ?>" />
		</div>
		</form>
	</fieldset>
</div>
</body>
</html>