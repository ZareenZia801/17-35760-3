<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Header file..</title>
</head>
<body>
<fieldset><img src="logo.png">
<?php 

session_start();

if (isset($_SESSION['uname'])) 
{
	echo "<p align='right'>";
	
	echo "logged in as ".$_SESSION['uname'];
	echo "<a href='Logout.php'>| log Out</a></p>";
}

else
{
	echo "<p align='right'>";
	echo "<a href='home.php'><b>Home</b></a>";
	echo "<a href='Sign2.php'>|<b> log In</b></a>";
	echo "<a href='registration.php'>|<b> Registration</b></a></p>";
	
}

 ?>
</fieldset>
</body>
</html>

