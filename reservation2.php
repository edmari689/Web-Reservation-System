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
				width: 399px;
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
			label{
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
        <div class="body" style="background-color: #FEFCFF; height: 460px; margin: auto; width: 70%">
            <div style="height: 45px; background-color: transparent"></div>
            <?php
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');

			$checkinDate = $_POST['checkinDate'];
			$checkoutDate = $_POST['checkoutDate'];
			$guest = $_POST['guest'];
			$type = $_POST['type'];
			
			if($type == "Retreat")
			{
				echo "<fieldset style='text-align:left; margin: left;' class='reserve'>";
				echo "<legend>Reservation Form: Step 2</legend>";
				echo "<label><b><center>Choose a Package</center></b></label>";
				echo "<hr></hr>";
				echo "<form name='addReservation' action='addReservation.php' method = 'post'>";
				
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
				echo "<label><b><center>Choose the Type of Person</center></b></label>";
				echo "<hr></hr>";
				echo "<form name='reservation3' action='reservation3.php' method = 'post'>";
				
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
