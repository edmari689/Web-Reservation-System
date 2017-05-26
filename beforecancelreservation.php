<?php

session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<html>
    <head>
        <style>
            body{
                background-image:url("editme.jpg");
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
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
           th{
				font-family: candara;
				font-size: 15px;
				width: 200px;
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
            $name = $_SESSION['name'];
            
            if(!isset($_SESSION['id'])){
        
                    echo '<a href="homepage.php"><h3 class="a1"> Home /h3></a>';
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
                    echo "<a href='logout.php'><h3 class='a5'> Click here to Logout: $name  </h3> </a>";
    
                }
            ?>
        </div>
        <div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>
        <div class="body" style="background-color: #FEFCFF; height: 425px; margin: auto; width: 70%">
            <form name="cancelreservation" action="cancelreservation.php"> 	
			<?php
				$id = $_REQUEST['id'];
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM reservation where id='$id'";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='0'>";
				echo "<tr><th>Check-In Date</th><th>Check-Out Date</th><th>Guests</th><th>Type of Reservation</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<td><input type='text' name='checkinDate' id='checkinDate' value='";
					echo mysql_result($r, $i, 'checkin_date');
					echo "' readonly></td><td><input type='text' name='checkoutDate' id='checkoutDate' value='";
					echo mysql_result($r, $i, 'checkout_date');
					echo "' readonly></td><td><input type='text' name='occupants' id='occupants' value='";
					echo mysql_result($r, $i, 'guest');
					echo "' readonly></td><td><input type='text' name='type' id='type' value='";
					echo mysql_result($r, $i, 'type');
					echo "' readonly></td><td><input type='hidden' name='client_id' id='client_id' value='";
					echo mysql_result($r, $i, 'client_id');
					echo "' readonly></td><td>";
					echo "<input type='submit' value='Cancel' />";
					echo "</td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST['id']; ?>" />
			</form>	
        </div>   
</body>		
</html>
