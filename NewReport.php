<!DOCTYPE html>
<html>
<head>
	<title>New Report</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
	<?php
	$proid = $_POST["project"];

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
<h2>Add a new report</h2>
<form action="submitReport.php" method="POST">
	<p><label>Report Title:<input type="text" name="title" id="title" required></label></p>
	<p><label>Upload your report in PDF format:<input type="file" name="fupload" id ="fupload" accept=".pdf" required></label></p>
				<p>
	<?php print("<input type='hidden' name='project' id='project' value= '$proid'>"); ?>
</p>
	<p><input type="Submit" name="prosub" id="prosub" value="Submit" required></p>
</form>
	
</div> 
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>


