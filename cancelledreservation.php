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
        <div class="body" style="background-color: #FEFCFF; height: 500px; margin: auto; width: 70%">
		<br/>
		<br/>
		 <img src="cancelled.png">
        	<?php
				$id = $_SESSION['id'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM cancel_reservation INNER JOIN confirm_client ON cancel_reservation.client_id=confirm_client.id where client_id='$id'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<div STYLE=' height: 150px; width: 900px; font-size: 12px; overflow: auto;'>";
				echo "<table border='1' align='center'>";
				echo "<tr><th>Name</th><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type</th><th>Date Modified</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'confirm_client.name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'cancel_reservation.checkin_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'cancel_reservation.checkout_date');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'cancel_reservation.guest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'cancel_reservation.type');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'cancel_reservation.modify');
					echo "</p></td></tr>";
				}
				echo "</table>";
				echo "</div>";
				mysql_close($db);
			?>	
		</div>
</body>		
</html>
