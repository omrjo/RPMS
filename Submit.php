<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<meta http-equiv="refresh" content="2; url=PendingProjects.php">
</head>
<body>
	<?php
			session_start();
			$id = $_SESSION["id"];
			$title = $_POST["title"];
			$domain = $_POST["domain"];
			$budget = $_POST["budget"];
			$file = $_POST["fupload"];

			 $query = "INSERT INTO Projects (title,domain,budget,file,Resid) VALUES ('$title','$domain','$budget','$file','$id')";

			 $database = mysqli_connect("localhost","root","");

			 mysqli_select_db($database,"rpmsdb");

			 mysqli_query($database,$query);
			 $query2 = "SELECT id FROM projects ORDER BY id DESC LIMIT 1";
			 $result = mysqli_query($database,$query2);
			 $row = mysqli_fetch_row($result);
			 $empid = $row[0];

			 $query3 = "INSERT INTO recive (Proid,Empid) VALUES ('$empid','1')";
			 mysqli_query($database,$query3);

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
			<li><a href="HomeResearcher.html">Home</a></li>
			<li><a href="ProjectsResearcher.php">Your Projects</a></li>
			<li><a href="ReviewProjects.php">Projects for Review</a></li>
			<li><a href="NewProject.html">New Project</a></li>
			<li><a href="PendingProjects.php">Pending Projects</a></li>
			<li><a href="downloads.html">Downloads</a></li>
		</ul>
	</div>
	<div id="submit">
		<h3>You proposal have been submited succesfuly.</h3>
	</div>
	<div id="img">
		<img src="Loading_icon.gif" alt="loading">
	</div>
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>