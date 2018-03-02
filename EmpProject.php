<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
		<?php
		$current_id = $_GET["id"];
	$query = "SELECT * FROM projects where id = '$current_id'";
				 $database = mysqli_connect("localhost","root","");

			 mysqli_select_db($database,"rpmsdb");

			 $result = mysqli_query($database,$query);


	?>
<header>
	<div id="header">
	<img src="logo1.jpg" alt="Al-imam logo" width="120" height="120" id="logo">
	<a href="redirectLogout.php"><img src="log.png" width="50" height="50" id="login"></a>
	<p id="headerPar">Kingdom of Saudi Arabia<br>Ministry of Education<br>Al-Imam Muhammed Ibn Saud Islamic University</p>
	<h1 id="title">The Scientific Research Deanery</h1>
	</div>
</header>
<div id="nav">
		<ul>
			<li><a href="HomeEmployee.html">Home</a></li>
			<li><a href="ProjectsEmployee.php">Projects</a></li>
		</ul>
	</div>
	
</div> 
<div class="box">
	<div class="head">
		<h3>Project's title</h3>
	</div>
	
	<table id="projTable2">
		<?php
		while ($row = mysqli_fetch_row($result))
		 {
		
		print("<tr><td>Project's Domain:</td>
			<td>". $row["2"] ."</td></tr>");

		print("<tr><td>Project's Budget:</td>
			<td>". $row["3"] ."</td></tr>");


		print("<tr><td>Project's Description:</td>
			<td>". $row["4"] ."</td></tr>");

		print("<tr><td>Project's Researchers:</td>
			<td>". $row["6"] ."</td></tr>");
		}

		?>
	</table>
	
		<form method="post" action="submitValidate.php">
			<p>
				<select name="researcher">
		<?php
		$query1 = "SELECT researchers.firstname,researchers.lastname,researchers.id,departments.name FROM researchers JOIN departments ON departments.id = researchers.Depid ";
		$result1 = mysqli_query($database,$query1);
				while ($row = mysqli_fetch_row($result1))
		 {
			print("<option value = '$row[2]'>$row[0] $row[1] - $row[3] </option>");	
		}
		
mysqli_close($database);
		  ?>
	</select>
</p>
<p>
	<input type="submit" name="validate" value="Send">
				<p>
	<?php print("<input type='hidden' name='project' id='project' value='$current_id'>");?>
</p>
</p>
		</form>
</div>
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>


