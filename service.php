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
	fieldset{
	-moz-border-radius: 15px;
	border-radius: 15px;
	border:solid 2px black;
	}
	legend{
		font-family: verdana;
		background-color: #FF8040;
		color:#000000;
		-moz-border-radius: 7px;
		border-radius: 7px;
	}
	th{
		font-family: candara;
		font-size: 15px;
		width: 200px;
		background-color: #000000;
		color: #FFFFFF;
	}
	fieldset.recollection fieldset.retreat{
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
	<script>
	function myFunction(){
		window.open("servicePrint.php");
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
	<br/>
	<button onclick="myFunction()"> Print this page </button>
	<fieldset style="width:45%; float: left">
		<legend> Recollection Rates </legend> 

		<form action='searchreservation.php' method='GET'>
			<input type='text' size='30' name='search' class="searchbar">
			<input type='submit' name='submit' value='Search'class="searchbutton" >
			<img src="search.png" class="search"/>
		</form>
		
		<div id="middlerecord" class="scroll">
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Student Rate</th><th>Regular Guest Rate</th><th>Per Meal Rate</th><th>Per Snack Rate</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'student');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'regular_guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'meals');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'snacks');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<br/>
			<?php
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
			$query = "Select * from recollection_package where guest_type = 'Student'";
			$r = mysql_query($query);
			$rows = mysql_num_rows($r);
			
			$query2 = "Select * from recollection_package where guest_type = 'Regular'";
			$r2 = mysql_query($query2);
			$rows2 = mysql_num_rows($r2);
			
			echo "<h4>List of Packages for Students</h4>";
			echo "<table border = '1'>";
			echo "<tr><th>Kind of Package</th><th>Amount</th><th>Status</th></tr>";
			for($i=0; $i < $rows; $i++){
				echo "<tr><td><p>";
				echo mysql_result($r, $i, 'service_name');
				echo "</p></td><td><p>";
				echo mysql_result($r, $i, 'amount');
				echo "</p></td><td><p>";
				echo mysql_result($r, $i, 'status');
				echo "</p></td><td><p>";
				echo "<a href='editrecollectionpackage.php? id=";
				echo mysql_result($r, $i, 'id');
				echo "'>Edit</a>";
				echo "</p></td></tr>";
			}
			echo "</table>";
			
			echo "<h4>List of Packages for Regular Guests</h4>";
			echo "<table border = '1'>";
			echo "<tr><th>Kind of Package</th><th>Amount</th><th>Status</th></tr>";
			for($j=0; $j < $rows2; $j++){
				echo "<tr><td><p>";
				echo mysql_result($r2, $j, 'service_name');
				echo "</p></td><td><p>";
				echo mysql_result($r2, $j, 'amount');
				echo "</p></td><td><p>";
				echo mysql_result($r2, $j, 'status');
				echo "</p></td><td><p>";
				echo "<a href='editrecollectionpackage.php? id=";
				echo mysql_result($r2, $j, 'id');
				echo "'>Edit</a>";
				echo "</p></td></tr>";
			}
			echo "</table>";
			mysql_close($db);
			?>
		</div>
	</fieldset>
	<fieldset style="width: 50%; float: right">
		<legend> Retreat Rate </legend>
		<h4>Inside Full Package</h4>
		<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (meals * 3) as 3meals, (snacks * 2) as 3snacks FROM retreat_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Rate per Night</th><th>Fixed Rate (both regular guests and Students)</th><th>Rate for 3 Meals</th><th>Rate for 2 Snacks</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'sleep');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'regular_guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '3meals');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '3snacks');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
		?>	
		
		<br/>
			<h4>List of Packages</h4>
			<?php
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
			$query = "Select * from retreat_package";
			$r = mysql_query($query);
			$rows = mysql_num_rows($r);
			echo "<table border = '1'>";
			echo "<tr><th>Kind of Package</th><th>Amount</th><th>Status</th></tr>";
			for($i=0; $i < $rows; $i++){
			echo "<tr><td><p>";
					echo mysql_result($r, $i, 'service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'status');
					echo "</p></td><td><p>";
					echo "<a href='editretreatpackage.php? id=";
					echo mysql_result($r, $i, 'id');
					echo "'>Edit</a>";
					echo "&nbsp&nbsp";
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			
			?>
	</fieldset>	
</div>
</body>
</html>