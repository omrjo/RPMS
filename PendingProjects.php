<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
		<?php
			session_start();
	$id = $_SESSION["id"];
				 $query = "SELECT id,title FROM projects where state = 'hold' && Resid = '$id'";

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
			<li><a href="HomeResearcher.html">Home</a></li>
			<li><a href="ProjectsResearcher.php">Your Projects</a></li>
			<li><a href="ReviewProjects.php">Projects for Review</a></li>
			<li><a href="NewProject.html">New Project</a></li>
			<li><a href="PendingProjects.php">Pending Projects</a></li>
			<li><a href="downloads.html">Downloads</a></li>
		</ul>
	</div>
	
</div> 
<div class="box">
	<div class="head">
		<h3>Pending Projects:</h3>
	</div>
	<table id="projTable2">
		<tr>
			<th>Id</th>
			<th>Project</th>
		</tr>
		<?php
		if ($result == False)
			print("<tr><td colspan = '2'>No Projects</td></tr>");
		else
		{
		while ($row = mysqli_fetch_row($result))
		 {
			print("<tr><td>$row[0]</td>");	
			print("<td>$row[1]</td></tr>");
		}
	}


mysqli_close($database);
		
		?>
	</table>
</div>
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>


