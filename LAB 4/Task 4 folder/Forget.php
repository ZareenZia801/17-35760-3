<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forget password...</title>
</head>
<body>
  
<div class="menu">
<?php include 'header.php';
?>
</div>
	<fieldset><legend><b><p>FORGOT PASSWORD:</p></b></legend>
		<form action="Forget.php" method="POST">
  E-mail : <input type="text" name="mail" placeholder="Enter your mail id"><br><br>
 


  <input type="submit" name="submit" value="Submit"> 
  <a href="Sign2.php"><b>--Back to login page--</b></a></form>
</fieldset>
<div class="menu">
<?php include 'footer.php';?>
</div>

</body>
</html>


