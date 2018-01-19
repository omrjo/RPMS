<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<meta http-equiv="refresh" content="2; url=ProjectsEmployee.php">
</head>
<body>
	<?php

			$id = $_POST["researcher"];
			$current_id = $_POST["project"];

			 $query = "INSERT INTO validate (Proid,Resid) VALUES ('$current_id','$id')";
			 $query2 = "DELETE from recive where Proid = '$current_id'";

			 $database = mysqli_connect("localhost","root","");

			 mysqli_select_db($database,"rpmsdb");

			 mysqli_query($database,$query);
			 mysqli_query($database,$query2);

			 mysqli_close($database);


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
	<div id="submit">
		<h3> The project have been send for validate.</h3>
	</div>
	<div id="img">
		<img src="Loading_icon.gif" alt="loading">
	</div>
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>