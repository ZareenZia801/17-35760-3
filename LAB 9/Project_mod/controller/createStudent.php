<?php  
require_once '../model_1/model.php';


if (isset($_POST['createStudent'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	$data['stgender'] = $_POST['stgender'];
	$data['tgender'] = $_POST['tgender'];
	$data['ins'] = $_POST['ins'];
	$data['class'] = $_POST['class'];
	$data['phone'] = $_POST['phone'];
	$data['area'] = $_POST['area'];
	$data['sal'] = $_POST['sal'];
	$data['dob'] = $_POST['dob'];


  if (addStudent($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>