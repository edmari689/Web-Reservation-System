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
		
        </style>
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
                    echo '<a href="profile.php"><h3 class="a7"> <u> View Profile </u> </h3></a>';
					echo '<a href="payment.php"><h3 class="a8"> View Payment </h3></a>';
                    echo "<a href='logout.php'><h3 class='a5'> Click here to Logout: $name  </h3> </a>";
            }
            ?>
        </div>
        <div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>
        <div class="body" style="background-color: #FEFCFF; height: 1000px; margin: auto; width: 70%">
		<br/>
		<br/>
		 <img src="ongoing.png">
			<table align='center'>
			<tr>
			<td> <img src="recollection.png"> </td>
			</tr>
			</table>
        	<?php
			$id = $_SESSION['id'];
			$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where client_id='$id' and reservation.status = 'Confirmed' and reservation.checkin_date < now() and reservation.checkout_date > now() ORDER BY reservation.id ASC";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<div STYLE=' height: 200px; width: 900px; font-size: 12px; overflow: auto;'>";
				echo "<table border='1' align = 'center'>";
				echo "<tr><th>Check-In Date</th><th>Check-Out Date</th><th># of Guest</th><th>Type</th><th>Recollection Package</th><th>Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'type');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'recollection_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.status');
					echo "</p></td></tr>";
			}
			echo "</table>";
			echo"</div>";
			mysql_close($db);
			?>
			
			<table align='center'>
			<tr>
			<td> <img src="retreat.png"> </td>
			</tr>
			</table>
			<?php
			$id = $_SESSION['id'];
			$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM reservation INNER JOIN confirm_client ON reservation.client_id=confirm_client.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where client_id='$id' and reservation.status = 'Confirmed' and reservation.checkin_date < now() and reservation.checkout_date > now() ORDER BY reservation.id ASC";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<div STYLE=' height: 200px; width: 900px; font-size: 12px; overflow: auto;'>";
				echo "<table border='1' align = 'center'>";
				echo "<tr><th>Check-In Date</th><th>Check-Out Date</th><th># of Guest</th><th>Type</th><th>Retreat Package</th><th>Status</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'type');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'retreat_package.service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'reservation.status');
					echo "</p></td></tr>";
			}
			echo "</table>";
			echo"</div>";
			mysql_close($db);
			?>
			<center><h4>List of Check-In Guests</h4></center>
			<?php
			$id = $_SESSION['id'];
			$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');			
				$query3 = "SELECT * FROM guest_room_usage INNER JOIN guest ON guest_room_usage.guest_no=guest.id INNER JOIN confirmation ON guest_room_usage.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN confirm_client ON reservation.client_id=confirm_client.id where now() between reservation.checkin_date and reservation.checkout_date and client_id='$id' ORDER BY guest_room_usage.checkin_date ASC";
				$r3 = mysql_query($query3);
				$rows3 = mysql_num_rows($r3);
				echo "<div STYLE=' width: 900px; font-size: 12px; overflow: auto;'>";
				echo "<table border='1' align = 'center'>";
				echo "<tr><th>Room No.</th><th>Guest Name</th><th>Check-In Date</th></tr>";
				for($h=0; $h < $rows3; $h++)
				{
					echo "<tr><td><p>Room ";
					echo mysql_result($r3, $h, 'room_no');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $h, 'guest.name');
					echo "</p></td><td><p>";
					echo mysql_result($r3, $h, 'checkin_date');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo"</div>";
			mysql_close($db);
			?>
			<center><h4>List of Check-Out Guests</h4></center>
			<?php
			$id = $_SESSION['id'];
			$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');							
				$query2 = "SELECT * FROM checkout INNER JOIN guest ON checkout.guest_no=guest.id INNER JOIN confirmation ON checkout.confirm_id=confirmation.reserve_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN confirm_client ON reservation.client_id=confirm_client.id where now() between reservation.checkin_date and reservation.checkout_date and client_id='$id' ORDER BY checkout.checkout_date ASC";
				$r2 = mysql_query($query2);
				$rows2 = mysql_num_rows($r2);
				echo "<div STYLE=' width: 900px; font-size: 12px; overflow: auto;'>";
				echo "<table border='1' align = 'center'>";
				echo "<tr><th>Room No.</th><th>Guest Name</th><th>Check-In Date</th><th>Check-Out Date</th></tr>";
				for($j=0; $j < $rows2; $j++)
				{
					echo "<tr><td><p>Room ";
					echo mysql_result($r2, $j, 'room_no');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'guest.name');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r2, $j, 'checkout_date');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo"</div>";
			mysql_close($db);
			?>
		</div>
</body>		
</html>
