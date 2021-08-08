<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Change password for teacher</title>
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


    <script type="text/javascript">

        function validateForm() 
        {
            var minNumberofChars = 6;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            var onlyLetters = /[^A-Z a-z]/g;
            const regex_pattern =      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var Cpass=document.contactForm.Cpass.value;
            var Npass=document.contactForm.Npass.value;
            var Rpass=document.contactForm.Rpass.value;

            if(Cpass==null || Cpass=="") // Cpass = empty ?
            {  
              alert("Current Password can't be blank");  
              return false;  
            }  
             

            else if(Npass==null || Npass=="") // Npass = empty ?
            {  
              alert(" New Password can't be blank");  
              return false;  
            }  
            else if(Npass.length<6) // Npass length
            {  
              alert("New Password must be at least 6 characters long.");  
              return false;  
            }  
            else if(!regularExpression.test(Npass)) //Npass = 0123...9.. @#$%* ?
            {  
              alert("New password should contain atleast one number and one special character");  
              return false;  
            } 


            else if(Rpass==null || Rpass=="") // Rpass = empty ?
            {  
              alert(" Retype Password");  
              return false;  
            }  
            
        }
        
    </script>

  

<center>
       
               
<form name="contactForm" action="controller/changePass.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

        <legend><b><h1>CHANGE PASSWORD:</h1></b></legend>

 <?php  
 // echo $teacher['Password']; 
?><br>

        Current password: 
        <input type="text" name="Cpass" placeholder="Enter your current password"><br><br>
                   
        New Password: 
        <input type="text" name="Npass" placeholder="Enter new password"><br><br>
                    
        Retype New Password: 
        <input type="text" name="Rpass" placeholder="Retype new password"><br><br>
                   
        <input type="submit" name="changePass" value="Save">
    </form>
    </center>


    <div class="menu">
        <?php include 'Footer.php';?>
    </div>

</body>

</html>