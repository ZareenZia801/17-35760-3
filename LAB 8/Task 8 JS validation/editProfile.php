<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Edit profile for teacher</title>


<script type="text/javascript">

        function validateForm() 
        {
            var minNumberofChars = 6;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            var onlyLetters = /[^A-Z a-z]/g;
            const regex_pattern =      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var name=document.contactForm.name.value;  
            var email=document.contactForm.email.value;
            var ins=document.contactForm.ins.value;  
            var dep=document.contactForm.dep.value;
            var image=document.contactForm.image.value;


            if(onlyLetters.test(name)) // name = Zareen Zia(with white space) ?
            {  
              alert("Name can contain letters only");  
              return false;  
            }
           
            else if (!regex_pattern.test(email)) // email = Z8.A@gmail.com ?
            {
                alert("Enter valid email");
                return false;
            }
            else if(onlyLetters.test(ins)) // ins = A IUB(with white space) ?
            {  
              alert("Enter Valid Institution name.");  
              return false;  
            }
              else if(onlyLetters.test(dep)) // dep = CSE(with white space) ?
            {  
              alert("Enter Valid Department name.");  
              return false;  
            }
            // else if (image == null || image == "") // picture = empty?
            // {
            //     alert("Add picture.");
            //     return false;
            // }

        }
        
    </script>

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

                        
<form name="contactForm" action="controller/updateTeacher.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

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