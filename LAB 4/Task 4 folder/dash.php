<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User dashboard</title>
</head>
<body>


<div class="menu">
<?php include 'header.php';
?>
</div>
<div class="menu">
<?php include 'account.php';
?>
</div>
<center>
<fieldset style="width: 50%;">
	<?php 
	//session_start();

	if (isset($_SESSION['uname'])) 
	{
		echo "<h1>Welcome"."&#160". $_SESSION['uname'] ."!!!</h1>";

echo "<h1>This is your dashboard.</h1>
<h2>You can access your personal details and change your informations and profile picture with passwords.</h2>  <br>";


}
else{
		header("location:Sign.php");
		
	}

	$username="";
	if(isset($_COOKIE['user']))
	{
		$user= $_COOKIE['user'];
		$username= $user["username"];
    }
	?>

	
</fieldset>
</center> 


<div class="menu">
<?php include 'footer.php';
?>
</div>
</body>
</html>