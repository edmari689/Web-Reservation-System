<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
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
            fieldset.reserve{
				-moz-border-radius: 15px;
				border-radius: 15px;
				border:solid 2px black;
				width: 390px;
				margin: 0 auto;
			}
			legend{
				font-family: verdana;
				background-color: #FF8040;
				color: #000000;
				-moz-border-radius: 15px;
				border-radius: 15px;
			}
			td{
				font-family: century gothic;
			}
        </style>
        <script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
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
                    echo '<a href="reservation.php"><h3 class="a3"> <u> Reservation</u> </h3> </a>';
                    echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
                    echo '<a href="profile.php"><h3 class="a7"> View Profile </h3></a>';
					echo '<a href="payment.php"><h3 class="a8"> View Payment </h3></a>';
                    echo "<a href='logout.php'><h3 class='a5'> Click here to Logout: $name  </h3> </a>";
                }
            ?>
        </div>
        <div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>
        <div class="body" style="background-color: #FEFCFF; height: 425px; margin: auto; width: 70%">
            <div style="height: 45px; background-color: transparent"></div>
            <form name="reservation2" action="reservation2.php" onsubmit = "return validateForm(this)" method = "post">
			
			<fieldset style="text-align:left; margin: left;" class="reserve">
				<legend>Reservation Form </legend>
		
				<table border = "0" align="center" class = 'tab'>
					
					<tr>
						<td>Check-In Date</td>
						<td><input type = 'text' name = 'checkinDate' id = 'checkinDate'>
						<a href="javascript:NewCal('checkinDate','yyyymmdd',24)"><img src="dateCalendar.jpg" width="16" height="16" border="0" alt="Pick a date"></a></td>
					</tr>
					<tr>
						<td>Check-Out Date </td>
						<td><input type = 'text' name = 'checkoutDate' id = 'checkoutDate'>
						<a href="javascript:NewCal('checkoutDate','yyyymmdd',24)"><img src="dateCalendar.jpg" width="16" height="16" border="0" alt="Pick a date"></a></td>
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
					<tr>
						<td colspan='2'><p style="color:red;">Inconsistent Dates! Please properly reserve the desired dates.</p></td>
					</tr>
					</table>
					<table align="center" class = "tab2">
						<td><button type = "submit" style="background-color: #41A317; color: #FEFCFF"> Reserve Now </button> </td>
						<td><button type = "reset" style="background-color: #990012; color: #FEFCFF"> Clear </button> </td>
					</table>
			
		</fieldset>
		</form>
        </div>   
    
</body>		
</html>
