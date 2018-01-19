<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
	<?php
	$current_id = $_GET["id"];
	$query = "SELECT * FROM projects WHERE id = '$current_id'";
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
	<h2>Project's title</h2>
	
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
<form action="Reports.php" method="post">
		<p>
	<?php print("<input type='hidden' name='project' id='project' value='$current_id'>");
	mysqli_close($database);?>
</p>
	<p>
	<input type="submit" name="report" id="report" value="Project's Reports">
</p>
</form>	    

</div>
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>


