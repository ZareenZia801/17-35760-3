<?php  
require_once '../model/model.php';
session_start();

if (isset($_POST['updateTeacher'])) 
{
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['ins'] = $_POST['ins'];
	$data['dep'] = $_POST['dep'];
  $data['image'] = basename($_FILES["image"]["name"]);



 if (updateTeacher($_SESSION['uname'], $data))
  {
  	if (!empty($data['image'])) 
			{
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);

			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
				{
			    echo "The picture named ". basename( $_FILES["image"]["name"]). " has been uploaded.<br>";
			  } 
			  else 
			  {
			    echo "Sorry, there was an error uploading your file.";
			  }

			 updateFile($_SESSION['uname'], $data['image']);
			}

  	echo '<br>Successfully updated!!';
  	
  	header('Location: ../viewProfile.php');
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}


?>