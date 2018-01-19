<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<meta http-equiv="refresh" content="2; url=LOG IN page.php">
</head>
<body>
	<?php
	session_start();
		$_SESSION["id"] = "";
		session_destroy();

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
		<h3>Logout from website.</h3>
	</div>
	<div id="img">
		<img src="Loading_icon.gif" alt="loading">
	</div>
<footer>
	<p>&copy;The Scientific Research Deanery</p>
</footer>
</body>
</html>