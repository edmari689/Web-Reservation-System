<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
		if(!isset($_SESSION['id']))
			{
			header("location: homepage.php");
            }
?>
<html>
    <head>
        <style>
            body{
                background-image:url("editme.jpg");
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
				overflow:auto;
            }
            .upper{

                height: 20px;
                background-position: fixed;
                
            }
            .middle{

                margin: auto;
                width:70%;
                height: 80%;
                top: 55%;
                background-color: #FFFFFF;
                opacity: .3;
            }
            img.log{

                display:block;
                margin-left: auto;
                margin-right: auto;
                
            }
            img.ph{

                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 950px;
                height: 350px;
                -moz-border-radius: 8px;
                border-radius: 8px;
               
            }
            #menu {
                position: fixed;
                right: 0;
                top: 50%;
                width: 8em;
                margin-top: -2.5em;
                background-color: #6CBB3C;
                -moz-border-radius: 6px;
                border-radius: 6px;
                opacity: .4;
            }
            #menu:hover{
                opacity: 1.0;

            }
            h3.a1{
                position: absolute;
                top: 160px;
                left: 240px;
                font-family: calibri;
                color: #000000;
            }
            h3.a1:hover{
                color: #437C17;
            }
            h3.a2{
                position: absolute;
                top: 160px;
                left: 315px;
                font-family: calibri;
                color: #000000;
            }
            h3.a2:hover{
                color: #437C17;
            }
            h3.a4{
                position: absolute;
                top: 160px;
                left: 465px;
                font-family: calibri;
                color: #000000;
            }
            h3.a4:hover{
                color: #437C17;
            }
            h3.a3{
                position: absolute;
                top: 160px;
                left: 570px;
                font-family: calibri;
                color: #000000;
            }
            h3.a3:hover{
                color: #437C17;
            }
            h3.a5{
                position:absolute;
                top: 123px;
                right: 220px;
                font-family: calibri;
                color: #FEFCFF;
            }
            h3.a5:hover{
                color: #437C17;
            }
            h3.a6{
                position: absolute;
                top: 160px;
                right: 220px;
                font-family: calibri;
                color: #000000;
            }
            h3.a6:hover{
                color: #437C17;
            }
            h3.a7{
                position: absolute;
                top: 160px;
                left: 695px;
                font-family: calibri;
                color: #000000;
            }
            h3.a7:hover{
                color: #437C17;
            }
			h3.a8{
                position: absolute;
                top: 160px;
                left: 825;
                font-family: calibri;
                color: #000000;
            }
            h3.a8:hover{
                color: #437C17;
            }
           th{
				font-family: candara;
				font-size: 13px;
				width: 50px;
				background-color: #000000;
				color: #FFFFFF;
			}
			.ph-post1-wrapper {
  font-family:cursive;
  font-weight: 500;
  }
  .ph-post1-wrapper img {
    max-width: 100%;
    height: auto; }
  .ph-post1-wrapper a {
    text-decoration: none; }
  .ph-post1-wrapper h1 {
    text-align: center;
    margin-bottom: 1.4em;
    color: #4186b2; }
	

.ph-post1-wrapper .button {
  display: block;
  position: relative;
  height: 3.4em;
  width: 20em;
  margin: .7em auto;
  overflow: hidden;
	left :0%;}
  .ph-post1-wrapper .button > span {
    display: block;
    position: absolute;
    overflow: hidden;
    left: 0%;
    top: 0;
    width: 0%;
    height: 100%;
    -webkit-transition: 1s ease-in-out;
    -moz-transition: 1s ease-in-out;
    -o-transition: 1s ease-in-out;
    transition: 1s ease-in-out; }
  .ph-post1-wrapper .button:after, .ph-post1-wrapper .button > span > span {
    display: block;
    text-align: center;
    border-radius: 0.625em;
    padding: 1em 0; }
  .ph-post1-wrapper .button:after {
    content: attr(data-title);
    width: 100%;
    background: #4186b2;
    color: #67d6c1; }
  .ph-post1-wrapper .button > span > span {
    width: 20em;
    background: #67d6c1;
    color: #4186b2; }
  .ph-post1-wrapper .button:hover > span {
    width: 100%; }

.ph-post1-wrapper .button1 > span {
  height: 0%;
  width: 100%; }
.ph-post1-wrapper .button1:hover > span {
  height: 100%; }
.ph-post1-wrapper .button1:after {
  background: #eb6e61;
  color: #2f3c4b; }
.ph-post1-wrapper .button1 > span > span {
  background: #2f3c4b;
  color: #eb6e61; }


		
        </style>
		<link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
		
    </head>
<body>
    
        <div style="height: 35px"></div>   
            <img src="sdlogo.png" class="log"/>
        <div style="background-color:#000000; height: 25px; margin:auto; width:70%;"></div>
        <div class="header" style="background-color: #F0F8FF; height: 50px; margin: auto; width: 70%;">
            <?php
            if(isset($_SESSION['name']))
			{ 
				$name = $_SESSION['name']; 
			}
            if(!isset($_SESSION['id']))
			{
					echo '<a href="homepage.php"><h3 class="a1"> <u> Home </u> </h3></a>';
                    echo '<a href="room_rates.php"><h3 class="a2"> Rates & Tariffs </h3></a>';
                    echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
                    echo '<a href="login.php"><h3 class="a5"> Click Here To: Login  </h3> </a>';
                    echo '<a href="register.php"><h3 class="a6">  Sign Up </h3> </a>';
            }
            else
            {
                    echo '<a href="homepage.php"><h3 class="a1"> Home </h3></a>';
                    echo '<a href="room_rates.php"><h3 class="a2"> Rates & Tariffs </h3></a>';
                    echo '<a href="reservation.php"><h3 class="a3"> Reservation </h3> </a>';
                    echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
                    echo '<a href="profile.php"><h3 class="a7"> View Profile </h3></a>';
					echo '<a href="payment.php"><h3 class="a8"> <u> View Payment </u> </h3></a>';
                    echo "<a href='logout.php'><h3 class='a5'> Click here to Logout: $name  </h3> </a>";
            }
            ?>
        </div>
        <div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>
        <div class="ph-post1-wrapper" style="background-color: #FEFCFF; height: 500px; margin: auto; width: 70%">
			<?php
				$id = $_SESSION['id'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				
				$query = "SELECT * FROM payment INNER JOIN confirmation ON payment.confirm_id=confirmation.id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id INNER JOIN confirm_client ON reservation.client_id=confirm_client.id where confirm_client.id='$id'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				
				$query2 = "SELECT * FROM payment INNER JOIN confirmation ON payment.confirm_id=confirmation.id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id INNER JOIN confirm_client ON reservation.client_id=confirm_client.id where confirm_client.id='$id'";
				$r2 = mysql_query($query2);
				$rows2 = mysql_num_rows($r2);
				
				echo "<h4>Retreat</h4>";
				echo "<table border='0'>";
				echo "<tr><th>Client's Name</th><th>Check-In Date</th><th>Check-Out Date</th><th># of Participated Guests</th><th>Type of Event</th><th>Package Name</th><th>Package Amount</th><th>Actual Balance</th><th>Amount Paid</th><th>Change</th><th>Transaction Date</th><th>Payment Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'confirmation.client_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'confirmation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'retreat_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'retreat_package.amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'payment.actual_balance');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'payment.amount_paid');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'payment.changer');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'payment.paid_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'confirmation.payment_status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				
				echo "<h4>Recollection</h4>";
				echo "<table border='0'>";
				echo "<tr><th>Client's Name</th><th>Check-In Date</th><th>Check-Out Date</th><th># of Participated Guests</th><th>Type of Event</th><th>Package Name</th><th>Package Amount</th><th>Actual Balance</th><th>Amount Paid</th><th>Change</th><th>Transaction Date</th><th>Payment Status</th></tr>";
				for($j=0; $j < $rows2; $j++){
					echo "<tr><td><p>";
					echo mysql_result($r2, $j, 'confirmation.client_name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'confirmation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'recollection_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'recollection_package.amount');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'payment.actual_balance');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'payment.amount_paid');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'payment.changer');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'payment.paid_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'confirmation.payment_status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
		</div>
</body>		
</html>
