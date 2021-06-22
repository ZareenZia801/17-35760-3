<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Profile</title>
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

    <fieldset style="width: 90%; ">
	<legend><b><h1>Profile:</h1></b></legend>
	<p><img src="ProfilePicLogo.png"alt="hati" style="width: 100px; height: 100px;"></img><br>
<?php 

if (isset($_SESSION['uname'])) 
{
	echo "Name: ".$_SESSION['uname']."<br>";

		$data = file_get_contents("task_4.json");  
		$data = json_decode($data, true);  

		foreach($data as $row)  
		{  if ($_SESSION['uname']==$row['name'])
	            {
	            	 echo "E-mail:".$row["e-mail"]; 
		             echo "<br>Gender:".$row["gender"]; 
			         echo "<br>Date of Birth:".$row["dob"]."<br><br>"; 

		        } 
		    
		}  

	  

}

 ?>
 
   <hr style="border: 0.1px solid;">
   <a href="registration.php"><b>Edit Profile</b></a>---or---<a href="CPPic.php"><b>Change Picture</b></a> <br>
</fieldset>
</fieldset>
</center>




<div class="menu">
<?php include 'footer.php';
?>

</body>
</html>