<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link rel="stylesheet" type="text/css" href="layout.css">

	<?php
	$query = "SELECT projects.id,projects.title FROM projects JOIN recive ON recive.Proid = projects.id where recive.Empid = '1' ";
				 $database = mysqli_connect("localhost","root","");

			 mysqli_select_db($database,"rpmsdb");

			 $result = mysqli_query($database,$query);


	?>
</head>
<body>
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
	
<div class="box">
	<h2>New Projects:</h2>
	<table id="projTable">
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
			print("<td><a href = 'EmpProject.php?id=$row[0]'>$row[1]</td></tr>");
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


