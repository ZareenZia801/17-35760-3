<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Edit profile for teacher</title>
</head>

<body>

    <div class="menu">
         <?php include 'navBar.php';?>
    </div>


<?php
if (!isset($_SESSION['uname'])) 
{
    header('location:SignIn.php');
} 
?>


    <?php 
         require_once 'controller/teacherInfo.php';
         $teacher = fetchTeacher($_SESSION['uname']);

    ?>

    <center>
            <div class="container" style="width:500px;">


<fieldset style="width: 400px; "><legend><b><h1> Edit Profile :</h1></b></legend>

                        
<form action="controller/updateTeacher.php" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label>
  <input value="<?php echo $teacher['Name'] ?>" type="text" id="name" name="name"><br><br>

  <label for="email">Email:</label>
  <input value="<?php echo $teacher['Email'] ?>" type="text" id="email" name="email"><br><br>

  <label for="ins">Institution:</label>
  <input value="<?php echo $teacher['Current_Institution'] ?>" type="text" id="ins" name="ins"><br><br>

  <label for="dep">Department:</label>
  <input value="<?php echo $teacher['Department'] ?>" type="text" id="dep" name="dep"><br><br>

  <label for="image">Image:</label>
  <img width="100px" src="uploads/<?php echo $teacher['image'] ?>" 
                 alt="<?php echo $teacher['Name'] ?>"><br>
  <input type="file" name="image"><br><br>

  <input type="submit" name = "updateTeacher" value="Update">
 
</form> 
</fieldset><br><br><br><br>
        </div>
                    
    </center>

<div class="menu">
        <?php include 'Footer.php';?>
</div>

</body>
</html>