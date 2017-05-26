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
            h3.gal{
                position: absolute;
                top: 160px;
                left: 465px;
                font-family: calibri;
                color: #000000;
            }
            h3.gal:hover{
                color: #437C17;
            }
            
            h3.a4{
                position: absolute;
                top: 160px;
                left: 570px;
                font-family: calibri;
                color: #000000;
            }
            h3.a4:hover{
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
            h3.a3{
                position: absolute;
                top: 160px;
                left: 695px;
                font-family: calibri;
                color: #000000;
            }
            h3.a3:hover{
                color: #437C17;
            }
            h3.a7{
                position: absolute;
                top: 160px;
                left: 840px;
                font-family: calibri;
                color: #000000;
            }
            h3.a7:hover{
                color: #437C17;
            }
            table th{
                background-color: #000000;
                color: #FEFCFF;
                font-family: century gothic;
                width: 600px;
            }
            table td{
                background-color: #FEFCFF;
            }
            label{
                font-size: 25px;
                font-family: arial;
                color: #800000;
             }
            h4{

                font-family: century gothic;
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
            if(!isset($_SESSION['id'])){
        
                    echo '<a href="homepage.php"><h3 class="a1"> Home</h3></a>';
                    echo '<a href="room_rates.php"><h3 class="a2"> <u> Rates & Tariffs </u></h3></a>';
                    echo '<a href="gallery.php"><h3 class="gal"> Gallery </h3></a>';
                    echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
                    echo '<a href="login.php"><h3 class="a5"> Click Here To: Login  </h3> </a>';
                    echo '<a href="register.php"><h3 class="a6">  Sign Up </h3> </a>';
                }
            else
            {
                    echo '<a href="homepage.php"><h3 class="a1"> Home </h3></a>';
                    echo '<a href="room_rates.php"><h3 class="a2">  <u> Rates & Tariffs </u> </h3></a>';
                    echo '<a href="gallery.php"><h3 class="gal"> Gallery </h3></a>';
                    echo '<a href="reservation.php"><h3 class="a3"> Reservation </h3> </a>';
                    echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
                    echo '<a href="profile.php"><h3 class="a7"> View Profile </h3></a>';
					echo "<a href='logout.php'><h3 class='a5'> Click here to Logout: $name  </h3> </a>";
                }
            ?>
        </div>
        <div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>
       
        <div class="body" style="background-color: #FEFCFF; height: 400px; margin: auto; width: 70%">
          
                
	<div style="background-color: transparent; height: 5px; margin:auto; width: 70%"></div>

	<div class="body" style="background-color: #FEFCFF; height: auto; margin: auto; width: 100%">
	
    <fieldset style="  background-color: #fcdfff;" >
	  		<div id="middlerecord" class="scroll" style="height:300px;overflow:auto;">
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table>";
                echo "<center><label> Recollection Breakdown </label></center>";
				echo "<tr><th> Student Rate </th><th> Regular Guest Rate</th><th> Meal Rates </th><th>Snack Rates </th></tr>";
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
		
			<h4>Recollection PACKAGES</h4>
			<?php
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
			$query = "Select * from recollection_package";
			$r = mysql_query($query);
			$rows = mysql_num_rows($r);
			echo "<table>";
			echo "<tr><th>Package</th><th>Guest Accommodation </th><th>Amount</th><th>Status</th></tr>";
			for($i=0; $i < $rows; $i++){
			echo "<tr><td><p>";
					echo mysql_result($r, $i, 'service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'guest_type');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			
			?>
		</div>
	</fieldset>
	<div id="middlerecord" class="scroll" style="height:300px;overflow:auto;">
	<fieldset style="  background-color: #c3fdb8;">
		
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (meals * 3) as 3meals, (snacks * 2) as 3snacks FROM retreat_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table>";
                echo "<center><label> Retreat Breakdown </label></center>";
				echo "<tr><th>Nightly Rates</th><th> Regular Fixed Rate </th><th>3 Meals Rate</th><th> 2 Snacks Rate</th></tr>";
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
			<h4>Retreat PACKAGES</h4>
			<?php
			$db = mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
			$query = "Select * from retreat_package";
			$r = mysql_query($query);
			$rows = mysql_num_rows($r);
			echo "<table>";
			echo "<tr><th>Package</th><th>Amount</th><th>Status</th></tr>";
			for($i=0; $i < $rows; $i++){
			echo "<tr><td><p>";
					echo mysql_result($r, $i, 'service_name');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'amount');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'status');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			
			?>
	</fieldset>	
		 </div>
        </div>
		</div>
        
</body>		
</html>
