<?php  
require_once '../model/model.php';
session_start();

if (isset($_POST['changePass'])) 
{
	$teacher = showTeacher($_SESSION['uname']);

	if($_POST['Cpass']==$teacher['Password'])
	{
		if($_POST['Npass']==$_POST['Rpass'])
		{
			if (changePass($_SESSION['uname'],$_POST['Npass'] ))
			  {

			  	header('Location: ../viewProfile.php');
			  	echo '<br>Successfully updated!!';
			  
			  }
		}

	}
	else 
	{
		echo 'You are not allowed to access this page.';
	}

 
}
else 
	{
		echo 'You are not allowed to access this page.';
	} 



?>