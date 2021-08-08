<!DOCTYPE html>
<html>

<head>
     <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Forget password</title>
</head>

<body>
   
    <div class="menu">
        <?php include 'navBar.php'; ?>
    </div>
   
    <center>
        <legend><b>
                <p><h1>Forget password for student:</h1></p>
            </b></legend>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            E-mail : <input type="text" name="mail" placeholder="Enter your email id"><br><br>
            <input type="submit">
            <a href="studentSignIn.php"><b> Back to login page</b></a>
        </form>

        </form>

        
    <div class="menu">
        <?php include 'Footer.php'; ?>
    </div>

   
</center>
</body>

</html>