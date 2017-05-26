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
	<form name="addreservations2" action="addreservations2.php" method="post">
	<div id="middlerecord" style="margin: 0 auto; width:400px">
	<fieldset style="text-align:left; margin: left;" class="reserve">
	<legend>Reservation Form </legend>
		<table border = "0" align="center" class = 'tab'>
			<tr>
			<td> Client's Name</td>
			<td>
				<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query="SELECT * FROM confirm_client";
				$result = mysql_query($query);
				$options="";
				echo "<select name='client_id' id = 'client_id' value=''>
				<option>Please Select A Name</option> ";

				while($nt=mysql_fetch_array($result))
				{
					echo "<option value='".$nt['id']."'>".$nt['name']."</option>";
				}
				echo "</select>";
				mysql_close($db);
				?>	
			</td>
			</tr>
			<tr>
				<td>Check-In Date</td>
				<td><input type = 'text' name = 'checkinDate' id = 'checkinDate'>
				<a href="javascript:NewCal('checkinDate','yyyymmdd',24)"><img src="dateCalendar.jpg" width="16" height="16" border="0" alt="Pick a date">
				</a>
				</td>
			</tr>
			<tr>
				<td>Check-Out Date </td>
				<td><input type = 'text' name = 'checkoutDate' id = 'checkoutDate'>
				<a href="javascript:NewCal('checkoutDate','yyyymmdd',24)"><img src="dateCalendar.jpg" width="16" height="16" border="0" alt="Pick a date">
				</a>
				</td>
			</tr>
			<tr>
				<td> No. of guests </td> <td> <input type = "text" name = "guest" id = "guest" size = "10"/></td>
			</tr>
			<tr>
				<td> Type of Reservation </td>
				<td><select name = "type" id = "type">
					<option value = ""> </option>
					<option value = "Retreat"> Retreat </option>
					<option value = "Recollection"> Recollection </option>
				</select></td>
			</tr>
			</table>
			<table align="center" class = "tab2">
				<td><button type = "submit" style="background-color: #41A317; color: #FEFCFF"> Reserve Now </button> </td>
				<td><button type = "reset" style="background-color: #990012; color: #FEFCFF"> Clear </button> </td>
			</table>
			
		</fieldset>
		</div>					
		</form>
</div>
</body>
</html>