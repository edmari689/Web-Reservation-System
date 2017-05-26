<html>
	<head>
		<title> Admin Page </title>
		<style>
		
			h4.a6{
				position: absolute;
				left: 3%;
				top: 25%;
				color: black;
				size: 1;
			}
            h4.a0
            {
                position: absolute;
                left: 3%;
                top: 30%;
                color: black;
				size: 1;
                
            } 
            h4.a1 
            {
                position: absolute;
                left: 3%;
                top: 35%;
                color: black;
				size: 1;
            }
			
			h4.a3
			{
				position:absolute;
				right: 3%;
				top: 10%;
				color: black;
				font-family: verdana;
				size: 1;
			}
			h4.a4
			{
				position:absolute;
				left: 3%;
				top: 40%;
				color: black;
				size: 1;
			}
			h4.a5
			{
				position:absolute;
				left: 3%;
				top: 45%;
				color: black;
				size: 1;
			}
			h4.a2
			{
				position:absolute;
				left: 3%;
				top: 50%;
				color: black;
				size: 1;
			}
			h4.a7
			{
				position:absolute;
				left: 3%;
				top: 55%;
				color: black;
				size: 1;
			}
			
			
			
			button.btn1
			{
				position: absolute;
				left: 3%;
				top: 55%;
			}
			
			button.btn2
			{
				position: absolute;
				left: 3%;
				top: 60%;
			}
			
			button.btn3
			{
				position: absolute;
				left: 3%;
				top: 65%;
			}
			div.scroll
			{
				
				height:200px;
				overflow:scroll;
			}
       </style>
	</head>
	<body background = "rosecheek.jpg">
		<div id="header" style="height:100;">
	
			<img src="blabla.png" style="float:left" width="170" height="90"/>
	
		</div>	
		<div id="blocker" style="background-color:#2B1B17;height:5px;"></div>
	
		<div id="menu" style="background-color:#FEFCFF;width:250px;height:550;float:left;opacity:0.3;">
	
			<a href = "reservationadmin.php"><h4 class='a0'> Customer Reservation Records </h4></a>
			<a href = "confirmation.php"><h4 class='a1'> Confirm Reservation </h4></a>
			<a href= "donationadmin.php"><h4 class='a2'> Donation Records </h4></a>
			<a href= "roomtag.php"><h4 class='a7'> Room Tagging </h4></a>
			<a href= "clients.php"><h4 class='a4'> View Client Profile </h4></a>
			<a href = "payment.php"><h4 class='a5'> Payment Records </h4></a>
			<a href = "admin.php"><h4 class='a6'> Home </h4></a>
			<a href = "adminlog.php"><h4 class='a3'> Logout </h4></a>
		
		</div>
		<div>
		<?php
		$button = $_GET ['submit'];
		$search = $_GET ['search']; 
 
		if(!$button)
			echo "you didn't submit a keyword";
		else
		{
			if(strlen($search)<=1)
				echo "Search term too short";
			else{
				echo "You searched for <b>$search</b> <hr size='1'></br>";
			
			mysql_connect('localhost','root','root');
			mysql_select_db('sacredheart');
 
			$search_exploded = explode (" ", $search);
 
			foreach($search_exploded as $search_each)
			{
			//$x++;
			//if($x==1)
			$construct .="donor_id LIKE '%$search_each%' OR donation LIKE '%$search_each%' OR receiver LIKE '%$search_each%' OR foundation_receiver LIKE '%$search_each%'";
			//else
			//$construct .="AND name LIKE '%$search_each%'";
			}
 
			$construct ="SELECT * FROM donation WHERE $construct";
			$run = mysql_query($construct);
 
			$foundnum = mysql_num_rows($run);
 
			if ($foundnum==0)
				echo "Sorry, there are no matching result for <b>$search</b>.</br></br>";
			else
			{
				echo "$foundnum results found !<p>";
				
				echo "<table border='1'>";
				echo "<tr><th>Donor</th><th>Donation</th><th>Date of Acceptance</th><th>Date of Release</th><th>Receiver</th></tr>";
				while($runrows = mysql_fetch_assoc($run)){
					$donor = $runrows ['donor_id'];
					$donation = $runrows ['donation'];
					$date_received = $runrows ['date_received'];
					$date_released = $runrows ['date_released'];
					$receiver = $runrows ['receiver'];
					$foundation_receiver = $runrows ['foundation_receiver'];
					echo "
						<tr>
						<td>$donor</td>
						<td>$donation</td>
						<td>$date_received</td>
						<td>$date_released</td>
						<td>$receiver</td>
						<td>$foundation_receiver</td>
						</tr>";
						}
						echo "</table>";
					}
				}
			}
		?>
		</div>
		<a href = "donationadmin.php"><h4> Back </h4></a>
	</body>
</html>