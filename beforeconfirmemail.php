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
	<fieldset style="text-align:left; margin: left; -moz-border-radius: 15px; border-radius: 15px; border:solid 2px black;" class="donation">
		<legend> Pending Client </legend> 
		<form name="confirmemail" action="confirmemail.php" method = "POST"> 	
		<div id="middlerecord" class="scroll" style="float:center;">
			<?php
				$id = $_REQUEST['id'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM pending_client where id='$id'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='0'>";
				echo "<tr><th>Name</th><th>Company Name</th><th>Company Address</th><th>Contact</th><th>Sex</th><th>Email Address</th><th>Username</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><input type='text' name='name' id='name' value='";
					echo mysql_result($r, $i, 'name');
					echo "' readonly></td><td><input type='text' name='company_name' id='company_name' value='";
					echo mysql_result($r, $i, 'company_name');
					echo "' readonly></td><td><input type='text' name='company_address' id='company_address' value='";
					echo mysql_result($r, $i, 'company_address');
					echo "' readonly></td><td><input type='text' name='contact' id='contact' value='";
					echo mysql_result($r, $i, 'contact');
					echo "' readonly></td><td><input type='text' name='sex' id='sex' value='";
					echo mysql_result($r, $i, 'sex');
					echo "' readonly></td><td><input type='text' name='email' id='email' value='";
					echo mysql_result($r, $i, 'email');
					echo "' readonly></td><td><input type='text' name='user' id='user' value='";
					echo mysql_result($r, $i, 'user');
					echo "' readonly></td><td><input type='hidden' name='pass' id='pass' value='";
					echo mysql_result($r, $i, 'pass');
					echo "' readonly></td><td>";
					echo "</td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<h4>Are you sure you want to confirm?</h4>
			<table align="left">
				<td><input type = "submit" name="confirm" value="Yes"/> </td></form>
				<form name="back" action="clients.php"><td><input type = "submit" value="No"/> </td></form>
			</table>
			<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>" />
		</div>
		</form>
	</fieldset>
</div>
</body>
</html>
<?php
/*if($_POST['confirm'])
{


	$name = addslashes(strip_tags($_POST['name']));
	$company_name = addslashes(strip_tags($_POST['company_name']));
	$company_address = addslashes(strip_tags($_POST['company_address']));
	$contact = addslashes(strip_tags($_POST['contact']));
	$sex = addslashes(strip_tags($_POST['sex']));
	$email = addslashes(strip_tags($_POST['email']));
	$user = addslashes(strip_tags($_POST['user']));
	$pass = addslashes(strip_tags($_POST['pass']));
	$id = addslashes(strip_tags($_POST['id']));


	
	$to = $email;
	$subject = "Activate you account";
	$headers = "From: zenith_gean@yahoo.com";
	$body = "Hello $user,\n\n You account has been confirmed by the Sacredhearts admin.Please Click on the link to sign in \n\nhttp://localhost/sacredheart/homepage.php\n\nThank You!";
	
	if(!mail($to,$subject,$body,$headers))
	echo "We couldn't confirm this time!";
	else
	{
	$before = "INSERT INTO confirm_client(name, company_name, company_address, contact, sex, email, user, pass, pending_client_id) 
	VALUES((select name from pending_client where id='$id'), (select company_name from pending_client where id='$id'), (select company_address from pending_client where id='$id'), 
	(select contact from pending_client where id='$id'), (select sex from pending_client where id='$id'), (select email from pending_client where id='$id'), (select user from pending_client where id='$id'),
	(select pass from pending_client where id='$id'), $id)";
	
	$query = "DELETE FROM pending_client where id='$id'";
	mysql_query($query);
	
	mysql_close($db);
	header("Location:clients.php");
}
}*/
?>