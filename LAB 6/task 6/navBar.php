<div class="header" id="myHeader">
        <h1 align="center" style="font-size: 50px;">Tuition.com</h1>
</div>

  <link rel="stylesheet" type="text/css" href="style.css">


<?php 

session_start();

if (isset($_SESSION['uname']))  
{
   
   echo "<p align='right'>";
   
   echo 'Logged in as <span class="username">'.$_SESSION['uname'].'</span>';
    echo "<a href='dash.php'> <b>Dashboard</b></a>";
    echo "<a href='viewProfile.php'><b>View Profile</b></a>";
    echo "<a href='change.php'><b>Change Password</b></a>";
   echo "<a href='Logout.php'> <b>Log Out</b></a></p>";
   
}

else
{
   echo "<p align='center'>";
   echo "<a href='web page.php'><b>Home page</b></a>" ;
   //echo "<a href='contact.php'><b>Contact Us</b></a>" ;
   echo "<a href='https://www.facebook.com/tutorsheba.official' target='_blank'><b>Our facebook page</b></a>";
   echo "<a href='developer.php'><b>Developer team</b></a>";
   echo "<a href='student_reg.php'><b>Request for a tutor</b></a>";
   echo "<a href='teacher_reg.php'><b>Register as tutor</b></a>";
   echo "<a href='faq.php'><b>FAQ</b></a>";
   echo "<a href='SignIn.php'><b>Sign in as Teacher</b></a>";
    echo "<a href='studentSignIn.php'><b>Sign in as Student</b></a>";
}

 ?>

</p>