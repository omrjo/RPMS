<?php
session_start();
$conn = mysqli_connect("localhost","root","","rpmsdb");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM researchers WHERE firstname='" . $_POST["firstname"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["id"] = $row['id'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
	session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head> <meta charset="utf-8">

			<title>Login</title>
	<link rel="stylesheet" type="text/css" href="LOG IN page.css">
	
</head>
<body>
<header>
	   <div id="header">
<img src="logo1.jpg" alt="Al-imam logo" width="120" height="120" id="logo"/>
 	   
<p id="headerPar">Kingdom of Saudi Arabia<br>Ministry of Education<br>Al-Imam Muhammed Ibn Saud Islamic University</p>
	   <h1 id="title">The Scientific Research Deanery</h1>
	   </div>
    </header>

<div class="login-box" >
<div class="box-header">
<h2>Login</h2>	
</div>
<?php if(empty($_SESSION["id"])) { ?>
<form action="" id="frmLogin" method = "post" autocomplete = "on">
<div class="error-message">
	<?php if(isset($message)) { echo $message; } ?>
	</div>


<p><label>Username  
	<input type="text" name="firstname" placeholder="name@domain.com" autofocus/> 
</label> 
</p>
	
<p><label for="password">Password
<input type="password" name="password" placeholder ="******"/>
</label>
</p>
<input type="submit" name="login" value="Login" >
<a href="#" style="text-decoration:none; color:black;"><strong><p>Need an account?</p></strong></a>
</form>

<?php 
} else {
header("Location: HomeResearcher.html"); 
}
?>
</div>

<footer id="footer">
	     <center><p>&copy; The Scientific Research Deanery</p></center>
    </footer>

</body></html>