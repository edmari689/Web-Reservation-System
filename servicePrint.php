<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<html>
	<head>

		<script>
			function myFunction(){
			window.print();
			}
		</script>

		<style>
			th{
				font-family: candara;
				font-size: 15px;
				width: 300px;
			}
		</style>

	</head>
<body>
	<img src="sacredlogo.jpg" width="50px" height="50px" /><label style="font-family: candara; font-size: 40px"> Sacred Heart Spirituality Centre </label><br/>
	<sub>Seminary Road, Pink Sister St., Catalunan Grande, Davao City, 8000</sub>
	<hr>
		<center><label style="font-family: candara; font-size: 20px"> RECOLLECTION RATES </label></center>
		
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT * FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Student Rate</th><th>Regular Guest Rate</th><th>Per Meal Rate</th><th>Per Snack Rate</th></tr>";
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
			
			<h4 class="label"> With Food Catering</h4>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (student + meals) as 1mealforstudent, (regular_guest + meals) as 1mealforguest, (student + (meals * 2)) as 2mealforstudent, (regular_guest + (meals * 2)) as 2mealforguest FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>1 Meal W/O Snacks for Student</th><th>1 Meal W/O Snacks for Regular Guest</th><th>2 Meals W/O Snacks for Student</th><th>2 Meals W/O Snacks for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, '1mealforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '1mealforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2mealforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2mealforguest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<br/>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (student + meals + snacks) as 1meal1snackforstudent, (regular_guest + meals + snacks) as 1meal1snackforguest, (student + (meals * 2) + snacks) as 2meal1snackforstudent, (regular_guest + (meals * 2) + snacks) as 2meal1snackforguest FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>1 Meal W/ 1 Snack for Student</th><th>1 Meal W/ 1 Snack for Regular Guest</th><th>2 Meals W/ 1 Snack for Student</th><th>2 Meals W/ 1 Snack for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, '1meal1snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '1meal1snackforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal1snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal1snackforguest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<br/>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (student + meals + (snacks * 2)) as 1meal2snackforstudent, (regular_guest + meals + (snacks * 2)) as 1meal2snackforguest, (student + (meals * 2) + (snacks * 2)) as 2meal2snackforstudent, (regular_guest + (meals * 2) + (snacks * 2)) as 2meal2snackforguest FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>1 Meal W/ 2 Snacks for Student</th><th>1 Meal W/ 2 Snacks for Regular Guest</th><th>2 Meals W/ 2 Snacks for Student</th><th>2 Meals W/ 2 Snacks for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, '1meal2snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '1meal2snackforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal2snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal2snackforguest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
			<h4 class="label"> Without Food Catering</h4>
			<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, student as total_student, regular_guest as total_guest FROM recollection_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Total Rate for Student</th><th>Total Rate for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, 'total_student');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, 'total_guest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
			?>	
	<hr>
	<center><label style="font-family: candara; font-size: 20px"> RETREAT RATES </label></center>	
		<h4 class="label">Inside Full Package</h4>
		<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (meals * 3) as 3meals, (snacks * 2) as 3snacks FROM retreat_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>Rate per Night</th><th>Fixed Rate (both regular guests and Students)</th><th>Rate for 3 Meals</th><th>Rate for 2 Snacks</th></tr>";
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
		
		<h4 class="label">With Food Catering Per Night</h4>
		<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (sleep + student + meals) as 1mealforstudent, (sleep + regular_guest + meals) as 1mealforguest, (sleep + student + (meals * 2)) as 2mealforstudent, (sleep + regular_guest + (meals * 2)) as 2mealforguest, (sleep + student + (meals * 3)) as 3mealforstudent, (sleep + regular_guest + (meals * 3)) as 3mealforguest FROM retreat_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>1 Meal W/O Snacks for Student</th><th>1 Meal W/O Snacks for Regular Guest</th><th>2 Meals W/O Snacks for Student</th><th>2 Meals W/O Snacks for Regular Guest</th><th>3 Meals W/O Snacks for Student</th><th>3 Meals W/O Snacks for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, '1mealforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '1mealforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2mealforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2mealforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '3mealforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '3mealforguest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
		?>	
		<br/>
		<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (sleep + student + meals + snacks) as 1meal1snackforstudent, (sleep + regular_guest + meals + snacks) as 1meal1snackforguest, (sleep + student + (meals * 2) + snacks) as 2meal1snackforstudent, (sleep + regular_guest + (meals * 2) + snacks) as 2meal1snackforguest, (sleep + student + (meals * 3) + snacks) as 3meal1snackforstudent, (sleep + regular_guest + (meals * 3) + snacks) as 3meal1snackforguest FROM retreat_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>1 Meal W/ 1 Snack for Student</th><th>1 Meal W/ 1 Snack for Regular Guest</th><th>2 Meals W/ 1 Snack for Student</th><th>2 Meals W/ 1 Snack for Regular Guest</th><th>3 Meals W/ 1 Snack for Student</th><th>3 Meals W/ 1 Snack for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, '1meal1snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '1meal1snackforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal1snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal1snackforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '3meal1snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '3meal1snackforguest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
		?>	
		<br/>
		<?php
				$db = mysql_connect('localhost','root','root');
				mysql_select_db('sacredheart');
				$query = "SELECT *, (sleep + student + meals + (snacks * 2)) as 1meal2snackforstudent, (sleep + regular_guest + meals + (snacks * 2)) as 1meal2snackforguest, (sleep + student + (meals * 2) + (snacks * 2)) as 2meal2snackforstudent, (sleep + regular_guest + (meals * 2) + (snacks * 2)) as 2meal2snackforguest FROM retreat_service";
				$r = mysql_query($query);
				$rows = mysql_num_rows($r);
				echo "<table border='1'>";
				echo "<tr><th>1 Meal W/ 2 Snacks for Student</th><th>1 Meal W/ 2 Snacks for Regular Guest</th><th>2 Meals W/ 2 Snacks for Student</th><th>2 Meals W/ 2 Snacks for Regular Guest</th></tr>";
				for($i=0; $i < $rows; $i++){
					echo "<tr><td><p>";
					echo mysql_result($r, $i, '1meal2snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '1meal2snackforguest');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal2snackforstudent');
					echo "</p></td><td><p>";
					echo mysql_result($r, $i, '2meal2snackforguest');
					echo "</p></td></tr>";
				}
				echo "</table>";
				mysql_close($db);
		?>
		
	<center> <label> Official Copy of Sacred Heart Spirituality and Formation Center </label></center>
	<center><u><p onclick="myFunction()"> Print this page.</p></u></center>

</body>
</html>