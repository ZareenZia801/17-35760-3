<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change profile pic!</title>
</head>
<body>
       <style type="text/css">
    body {
background-image: url('background_books.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 105%;
}
</style>

<div class="menu">
<?php include 'navBar.php';
?>
</div>
<div class="menu">
<?php include 'account.php';
?>
</div>


<div class="menu">
<?php //include 'picValidation.php';
?>
</div>
<center>
<fieldset style="width: 50%;">

	<form method="POST" action="dpvalidation.php" enctype="multipart/form-data"><br>
<fieldset style="width: 300px; "><legend><b>PROFILE PICTURE:</b></legend>
<img src="ProfilePicLogo.png" alt="ProfilePicLogo" style="width: 100px; height: 100px;"></img>
<input type="file" name="ProfilePicture"><br>

 <hr style="border: 0.1px solid;">

 <form method="POST" action="dash.php">
        </form>
       <form method="POST" action="viewProfile.php">
       <input type="submit"/></p></p></fieldset>
      </form>

</fieldset>
</center> 

 
<div class="menu">
<?php include 'Footer.php';
?>

</body>
</html>