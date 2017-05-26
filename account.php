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
                    echo "<a href='logout.php'><h3 class='a5'> Click here to Logout: $name  </h3> </a>";
            }
            ?>
        </div>
        <div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>
        <div class="body" style="background-color: #FEFCFF; height: 900px; margin: auto; width: 70%">


    
  <div class="content">
    <form action="previousreservation.php" method="post" id="view-balance-form" accept-charset="UTF-8"><table>
		<?php
		$id = $_SESSION['id'];
		$db = mysql_connect('localhost','root','root');
		mysql_select_db('sacredheart');
		$query2 = "SELECT *,(confirmation.guest * retreat_package.amount) as guestcount, (1 + day(checkout_date) - day(checkin_date)) as overall, ((confirmation.guest * retreat_package.amount) * (1 + day(checkout_date) - day(checkin_date))) as total FROM confirmation INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.client_id = '$id'  ORDER BY confirmation.id ASC";
		$r2 = mysql_query($query2);
		$rows2 = mysql_num_rows($r2);
		$retreat = "SELECT * FROM transaction INNER JOIN confirmation ON confirmation.id=transaction.confirm_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN retreat_package ON reservation.retreat_id=retreat_package.id where reservation.client_id = '$id'";
		$ret = mysql_query($retreat);
		$rows4 = mysql_num_rows($ret);
		
		
		echo "<div STYLE=' height: 20px; width: 300px; font-size: 12px; overflow: auto;'>";
		echo "<table'>";
		for($j=0; $j < $rows2; $j++){
			echo "<tr><td><strong>Client's Name:</strong></td><td>";
			echo mysql_result($r2, $j, 'confirmation.client_name');
			echo "</td><td><strong>Checkin Date:</td><td></strong>";
			echo mysql_result($r2, $j, 'reservation.checkin_date');
			echo "</td></tr><tr><td><strong>Type of Event:</td><td></strong>";
			echo mysql_result($r2, $j, 'reservation.type');
			echo "</td><td><strong>Checkout Date:</strong></td><td>";
			echo mysql_result($r2, $j, 'reservation.checkout_date');
			echo "</td></tr><tr><td><strong>Package Name:</strong></td><td>";
			echo mysql_result($r2, $j, 'retreat_package.service_name');
			echo "</td><td><strong>Package Amount:</strong></td><td>";
			echo mysql_result($r2, $j, 'retreat_package.amount');
			echo "</td></tr><tr><td>";
			echo "<strong> # of Guests:</strong></td><td>";
			echo mysql_result($r2, $j, 'confirmation.guest');
			echo "</td><td><strong>Subtotal</strong></td><td>";
			echo mysql_result($r2, $j, 'guestcount');
			echo "</td></tr>";
			echo "<tr><td><p><strong># of Days:</strong></p></td><td>";
			echo mysql_result($r2, $j, 'overall');
			echo "</td></tr>";
			echo "<tr><td><p><strong>Total</strong></p></td>";
			echo "<td><input type='text' name='total' id='total' value='";
			echo mysql_result($r2, $j, 'total');
			echo "'readonly></td></tr>";
			echo "<tr><td><hr></hr></td><td><hr></hr></td><td><hr></hr></td><td><hr></hr></td></tr>";
				}
	
			
			echo "</table>";
			echo "</div>";
		mysql_close($db);
		?>
		<div>
		<?php
		$id = $_SESSION['id'];
		$db = mysql_connect('localhost','root','root');
		mysql_select_db('sacredheart');
		$query3 = "SELECT *, (confirmation.guest * recollection_package.amount) as total FROM confirmation INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where reservation.client_id = '$id' ORDER BY confirmation.id ASC";
		$r3 = mysql_query($query3);
		$rows3 = mysql_num_rows($r3);
						
		echo "<div STYLE=' height: 400px;  font-size: 12px; overflow: auto;'>";
		echo "<table'>";
		$recollection = "SELECT * FROM transaction INNER JOIN confirmation ON confirmation.id=transaction.confirm_id INNER JOIN reservation ON confirmation.reserve_id=reservation.id INNER JOIN recollection_package ON reservation.recollection_id=recollection_package.id where transaction.confirm_id = '$id' and reservation.type = 'Recollection'";
		$rec = mysql_query($recollection);
		$rows5 = mysql_num_rows($rec);
		for($k=0; $k < $rows3; $k++){
			echo "<table>";
			echo "<tr><td><p><strong>Client's Page:<strong></p></td><td>";
			echo mysql_result($r3, $k, 'confirmation.client_name');
			echo "</td><td><strong>Checkin Date</strong></td><td>";
			echo mysql_result($r3, $k, 'reservation.checkin_date');
			echo "</td><tr><td><strong>Type of Event:</strong></td><td>";
			echo mysql_result($r3, $k, 'reservation.type');
			echo "</td><td><strong>Checkout Date:</strong></td><td>";
			echo mysql_result($r3, $k, 'reservation.checkout_date');
			echo "</td><tr><td><p><strong>Package Name:</strong></p></td><td>";
			echo mysql_result($r3, $k, 'recollection_package.service_name');
			echo "</td><td><p><strong>Package Amount:</strong></p></td><td>";
			echo mysql_result($r3, $k, 'recollection_package.amount');
			echo "</td></tr>";
			echo "<tr><td><p><strong># of Guests</strong></p></td><td>";
			echo mysql_result($r3, $k, 'confirmation.guest');
			echo "</td></tr>";
			echo "<tr><td><p><strong>Total</strong></p></td>";
			echo "<td><input type='text' name='total' id='total' value='";
			echo mysql_result($r3, $k, 'total');
			echo "'readonly></td></tr>";
			}
			
			echo "</table>";
			echo "</div>";
		mysql_close($db);
		?>
		</div></div>
		</div>
</body>
</html>