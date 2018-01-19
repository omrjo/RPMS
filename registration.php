<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up result</title>
<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
<?php

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$pass = $_POST["password"];
$mail = $_POST["email"];
$depart = $_POST["departments"];

$query = "INSERT INTO researchers (firstname, lastname, password, email, Depid) VALUES ('$fname', '$lname', '$pass', '$mail', '$depart')";

    if ( !( $database = mysqli_connect( "localhost", "root" ) ) )                      
    die( "Could not connect to database </body></html>");

		if ( !mysqli_select_db( $database , "rpmsdb" ) )
    die( "Could not open rpmsdb database </body></html>" );


      	if ( !( $result = mysqli_query( $database, $query ) ) ) 
         {
            print( "<p>Could not execute query!</p>" );
            die( mysqli_error() . "</body></html>" );
         } 

       mysqli_close( $database );
?>

<header>
     <div id="header">
     <img src="logo1.jpg" alt="Al-imam logo" width="120" height="120" id="logo">
     <p id="headerPar">Kingdom of Saudi Arabia<br>Ministry of Education<br>Al-Imam Muhammed Ibn Saud Islamic University</p>
     <h1 id="title">The Scientific Research Deanery</h1>
     </div>
</header>

  <div class="Register-box">
        <div id="signIn">
        <h3>Registration Success  <a href="#"> GO TO....</a></h3>
        </div>

      <p >Hi <?php print( $fname ); ?>. Thank you for 
         registration</p>
      <p class = "head">The following information has been saved 
         in our database:</p>
      <p >Name: <?php print( $fname ); &nbsp 
         print( $lname ); ?></p>
      <p >Email: <?php print( $mail ); ?></p>
      <p class = "head">Thanks</p>   
  </div>

  <footer id="footer">
       <p>&copy; The Scientific Research Deanery</p>
  </footer>

</body>
</html>