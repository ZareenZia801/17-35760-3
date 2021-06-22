<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log Out page</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:home.php");
	
}

else{
	header("location:home.php");
}

 ?>
</body>
</html>