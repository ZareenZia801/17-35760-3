<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta charset="utf-8">
    <title>Sign In Srudent</title>
</head>

<div class="menu">
<?php include 'navBar.php';
?>
<center>
 
 <div class="col-4 col-s-4">
<b><h1>LOGIN as Student</h1></b></div>

        <form action="controller/signTeacher.php" method="POST" enctype="multipart/form-data">

                <div class="col-4 col-s-4">
                    
                        <br><br>
                User Name:
                    <input type="text" name="username" placeholder="Enter your username."><br><br>
                Password:
                    <input type="password" name="password" placeholder="Enter Password"><br><br>
        
            <input name="remember" type="checkbox">Remember Me
            <br /><br />
            <input type="submit" name="submit" value="submit">
            <input type="button" onclick="location.href='Sforget.php';" value='Forget Password?'></div>

             <?php

            if (isset($_SESSION['uname'])) 
            {
                setcookie('STATUS', 'OK', time() + 3600, '/');
                header('location: dash.php');    
            } 
             
            ?> 
        </form></center>
   
    



<br></br>
<div class="menu">
<?php include 'footer.php';
?></div>