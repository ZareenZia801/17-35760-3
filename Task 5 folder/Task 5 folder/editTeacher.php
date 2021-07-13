<?php 

require_once 'controller/teacherInfo.php';
$teacher = fetchTeacher($_GET['id']);

 include "nav.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><fieldset style="width: 15%;">
  <legend><h1>DISPLAY:</h1></legend>

 <form action="controller/updateTeacher.php" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label><br>
  <input value="<?php echo $teacher['Name'] ?>" type="text" id="name" name="name"><br>

  <label for="email">Email:</label><br>
  <input value="<?php echo $teacher['Email'] ?>" type="text" id="email" name="email"><br>

  <label for="username">User Name:</label><br>
  <input value="<?php echo $teacher['Username'] ?>" type="text" id="username" name="username"><br>

  <label for="ins">Current Institution:</label><br>
  <input value="<?php echo $teacher['Current_Institution'] ?>" type="text" id="ins" name="ins"><br>

  <label for="dep">Department:</label><br>
  <input value="<?php echo $teacher['Department'] ?>" type="text" id="dep" name="dep"><br>

  <input type="file" name="image"><br><br>

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateTeacher" value="Save">
 
</form> 

</body>
</html>

