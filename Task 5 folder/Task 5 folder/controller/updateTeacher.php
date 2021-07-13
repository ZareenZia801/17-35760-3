<?php  
require_once '../model/model.php';


if (isset($_POST['updateTeacher'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['ins'] = $_POST['ins'];
	$data['dep'] = $_POST['dep'];
	
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["Name"]);
/*
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }*/
  if (updateTeacher($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	
  	header('Location: ../showTeacher.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>