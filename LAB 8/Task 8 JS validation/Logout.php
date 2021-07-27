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
	header("location:web page.php");
	
}

else{
	header("location:web page.php");
}

 ?>
</body>
</html>