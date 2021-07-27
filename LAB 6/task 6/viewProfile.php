<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>View Profile</title>
</head>

<body>
 
    <div class="menu">

        <?php 
         require_once 'controller/teacherInfo.php';
         include 'navBar.php';
         $teacher = fetchTeacher($_SESSION['uname']);
        ?>

    </div>
    
    <!-- redirecting to the signIn page if not logged in -->
    <?php

        if (!isset($_SESSION['uname'])) 
        {
            header('location:SignIn.php');
        }
    ?>
    <center>
       
            <fieldset style="width: 40%; ">
                <legend><b><h1>Profile:</h1></b></legend>
                 <img width="100px" src="uploads/<?php echo $teacher['image'] ?>" 
                 alt="<?php echo $teacher['Name'] ?>"><br>
                   

         <br>           
        <b>Name: </b><?php echo $teacher['Name'] ?><br>
        <b>Email:</b><?php echo $teacher['Email'] ?><br>
        <b>Username:</b><?php echo $teacher['Username'] ?><br>
        <b>Password:</b><?php echo $teacher['Password'] ?><br>
        <b>Gender:</b><?php echo $teacher['Gender'] ?><br>
        <b>Current_Institution:</b><?php echo $teacher['Current_Institution'] ?><br>
        <b>Department:</b><?php echo $teacher['Department'] ?><br>
        <b>Date of birth:</b><?php echo $teacher['DOB'] ?><br><br>
    

                    <hr style="border: 0.1px solid;">
                    <a href="editProfile.php"><b>Edit Profile</b></a>
            </fieldset><br><br><br><br>
        
    </center>
    <div class="menu">
        <?php include 'Footer.php';
?>

</body>

</html>