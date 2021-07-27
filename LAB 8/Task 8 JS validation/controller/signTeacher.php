<?php 

require_once '../model/model.php';

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$result=signTeacher($username,$password);
if($result)
{
	session_start();
	$_SESSION['uname'] = $username;
	header("Location: ../dash.php");
 }      
else
{
	echo "<br>failed ";
}
}
?>