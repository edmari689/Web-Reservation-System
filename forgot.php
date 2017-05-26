<html>
	<head>
	<title> Login </title>
        <style>
            h3.a1 
            {
                position: absolute;
                left: 100px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;

            } 
            h3.a2 
            {
                position: absolute;
                left: 200px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
            h3.a3 
            {
                position: absolute;
                left: 455px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
            h3.a4 
            {
                position: absolute;
                left: 350px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
			 h3.a5 
            {
                position: absolute;
                right: 50px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity:0;
            }
			 h3.a6 
            {
                position: absolute;
                right: 120px;
                top: 5%;
                color: #141414;
				font-family: century gothic;
				opacity: 0;
            }
            input.tuser
			{
            position: absolute;
            right: 200px;
            top:40%;
			-moz-border-radius: 6px;
			border-radius: 6px;
			border:solid 2px black;
			padding: 10px;
			}
            input.tpass
            {
            position: absolute;
            right: 200px;
            top:50%;
			-moz-border-radius: 6px;
			border-radius: 6px;
			border:solid 2px black;
			padding: 10px;
			}
			label.user
			{
				position:absolute;
				top: 41%;
				right: 452px;
				font-family: calibri;
				color: #000000;
				font-size: 150%;
			}
			label.pass
			{
				position:absolute;
				top: 51%;
				right: 452px;
				font-family: calibri;
				color: #000000;
				font-size: 150%;
			}
			label.log
			{
				position:absolute;
				top: 13%;
				right: 230px;
				font-family: calibri;
				color: #000000;
				font-size: 500%;
			}
			button.blog
			{
				position: absolute;
            	right: 225px;
            	top:60%;
				-moz-border-radius: 6px;
				border-radius: 6px;
				border:solid 2px black;
				padding: 10px;
			}
			a.register{

				position: absolute;
            	right: 220px;
            	top:37%;
			}
			.forgot
			{
				position: absolute;
            	right: 20%;
            	top: 70%;
			}
			.site
			{
				position: absolute;
            	right: 20%;
            	top: 75%;
			}
		

        </style>


	</head>
		<body background="hotair.jpg">
		

		<div id="menu" style="width: 10%">
			<?php
				if(!isset($_SESSION['id'])){
		
					echo '<a href="homepage.php"><h3 class="a1"> Home </h3></a>';
					echo '<a href="room_rates.php"><h3 class="a2"> Rates & Tariffs </h3></a>';
					echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
					echo '<a href="login.php"><h3 class="a5"> Login </h3> </a>';
					echo '<a href="register.php"><h3 class="a6"> Sign Up </h3> </a>';
				}
			else
			{
				
					echo '<a href="homepage.php"><h3 class="a1"> Home </h3></a>';
					echo '<a href="room_rates.php"><h3 class="a2"> Rates & Tariffs </h3></a>';
					echo '<a href="reservation.php"><h3 class="a3"> Reservation </h3> </a>';
					echo '<a href="donation.php"><h3 class="a4"> Donation </h3> </a>';
					echo "<a href='logout.php'><h3 class='a5'> $name   (  Logout  ) </h3> </a>";
	
				}
			?>	
		<div class="boxed">
		
		</div>

	<body>

	</body>

</html>