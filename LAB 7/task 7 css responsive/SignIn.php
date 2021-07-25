<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Sign In Teacher</title>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php'; ?>
    </div>


    <center>
    <div class="col-6 col-s-6">
    
        <b><h1 align="right">LOGIN as Teacher</h1></b></div></center>

<div class="col-6 col-s-6">
    
        <form action="controller/signTeacher.php" method="POST" enctype="multipart/form-data">
                
                User Name:
                    <input type="text" name="username" placeholder="Enter your username."><br><br>
                Password:
                    <input type="password" name="password" placeholder="Enter Password"><br><br>
        
            <input name="remember" type="checkbox">Remember Me<br /><br />
            <input type="submit" name="submit" value="submit">
            <input type="button" onclick="location.href='Forget.php';" value='Forget Password?'>

             <?php

            if (isset($_SESSION['uname'])) 
            {
                setcookie('STATUS', 'OK', time() + 3600, '/');
                header('location: dash.php');    
            } 
             
            ?> 
        </form>
    </div>


    <div class="menu">
        <?php include 'Footer.php'; ?>
    </div>

</body>
</html>