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
	fieldset.reserve{
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
	</style>

	<script language="javascript" type="text/javascript" src="datetimepicker.js"> 
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
	<div style="height: 40px"></div>
	<?php
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
			
			$client_id = $_POST['client_id'];
			$checkinDate = $_POST['checkinDate'];
			$checkoutDate = $_POST['checkoutDate'];
			$guest = $_POST['guest'];
			$type = $_POST['type'];
			
			if($type == "Retreat")
			{
				echo "<fieldset style='text-align:left; margin: left;' class='reserve'>";
				echo "<legend>Reservation Form: Step 2</legend>";
				echo "<p><b><center>Choose a Package</center></b></p>";
				echo "<hr></hr>";
				echo "<form name='addReservationAdmin' action='addReservationAdmin.php' method = 'post'>";
				
				$query="SELECT * FROM retreat_package where status != 'Unavailable'";
				$result = mysql_query($query);
				
				echo "<table>";
				echo "<tr>";
				echo "<td> Retreat Package Rates W/ Amount</td>";
				echo "<td><select name='retreat_id' id = 'retreat_id' value=''>
				<option value=''></option>";
				while($nt=mysql_fetch_array($result))
				{
					echo "<option value='".$nt['id']."'>".$nt['service_name']." / ".$nt['amount']."</option>";
				}
				echo "</select></td>";
				echo "</tr>";
				echo "</table>";
				
				echo "<table align='center' class = 'tab2'>";
				echo "<td><button type = 'submit' style='background-color: #41A317; color: #FEFCFF'> Reserve Now </button> </td>";
				echo "<td><button type = 'reset' style='background-color: #990012; color: #FEFCFF'> Clear </button> </td>";
				echo "</table>";
			}
			else
			{
				echo "<fieldset style='text-align:left; margin: left;' class='reserve'>";
				echo "<legend>Reservation Form: Step 2</legend>";
				echo "<p><b><center>Choose the Type of Person</center></b></p>";
				echo "<hr></hr>";
				echo "<form name='addreservations3' action='addreservations3.php' method = 'post'>";
				
				echo "<table>";
				echo "<tr>";
				echo "<td>";
				echo "<input type='radio' name='person' id='person' value='Student'/> Student";
				echo "<input type='radio' name='person' id='person' value='Regular'/> Regular Guest";
				echo "</td>";
				echo "</tr>";
				echo "</table>";
				
				echo "<table align='center' class = 'tab2'>";
				echo "<td><button type = 'submit' style='background-color: #41A317; color: #FEFCFF'> Next to Step 3</button> </td>";
				echo "<td><button type = 'reset' style='background-color: #990012; color: #FEFCFF'> Clear </button> </td>";
				echo "</table>";
			}
			echo "<input type='hidden' name='client_id' id='client_id' value='$client_id'>";
			echo "<input type='hidden' name='checkinDate' id='checkinDate' value='$checkinDate'>";
			echo "<input type='hidden' name='checkoutDate' id='checkoutDate' value='$checkoutDate'>";
			echo "<input type='hidden' name='guest' id='guest' value='$guest'>";
			echo "<input type='hidden' name='type' id='type' value='$type'>";
			echo "</form>";
			echo "</fieldset>";
			mysql_close($db);
			?>
	</div>
	</body>
</html>