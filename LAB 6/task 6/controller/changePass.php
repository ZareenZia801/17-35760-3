<?php  
require_once '../model/model.php';
session_start();

if (isset($_POST['changePass'])) 
{
	$data['password'] = $_POST['password'];
	// $data['email'] = $_POST['email'];
	// $data['ins'] = $_POST['ins'];



 if (changePass($_SESSION['uname'], $data))
  {

  	header('Location: ../viewProfile.php');

  	echo '<br>Successfully updated!!';
  
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}


?>