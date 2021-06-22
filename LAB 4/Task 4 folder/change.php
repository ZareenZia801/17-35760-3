<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change password!</title>
</head>
<body>
<div class="menu">
<?php include 'header.php';?>
</div>
<div class="menu">
<?php include 'account.php';?>
</div>


<center><fieldset style="width: 50%;">

<fieldset style="width: 90%; ">
	<legend><b><h1>CHANGE PASSWORD:</h1></b></legend>
  Current password: <input type="text" name="name" placeholder="Enter your current password">

  <br><br>
 <p style="color: green;">
   New Password: <input type="text" name="pass" placeholder="Enter new password"><br><br></p>
<p style="color: red;">
   Retype New Password: <input type="text" name="pass" placeholder="Retype new password">
   </p>

   <hr style="border: 0.1px solid;">
  <input type="submit" value="Submit"><br><br>
</fieldset>
</fieldset>
</center>


<div class="menu">
<?php include 'footer.php';?>
</div>

</body>
</html>