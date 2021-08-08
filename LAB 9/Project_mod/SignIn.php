<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Sign In Teacher</title>

    <script type="text/javascript">




        function validateForm()
        {
            var minNumberofChars = 6;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;


            var username=document.contactForm.username.value;
            var password=document.contactForm.password.value;


            if (username == null || username == "") // username = empty?
            {
                alert("Username must be filled out");
                return false;
            }
             else if(regex.test(username)) // username = @#$%* ?
            {
              alert("Username cannot contain any special character");
              return false;
            }
            else if(password==null || password=="") // password = empty ?
            {
              alert("Password can't be blank");
              return false;
            }
            else if(password.length<6) // password length
            {
              alert("Password must be at least 6 characters long.");
              return false;
            }
            else if(!regularExpression.test(password)) //password = 0123...9.. @#$%* ?
            {
              alert("password should contain atleast one number and one special character");
              return false;
            }
        }
        forceFocus() ;
    </script>
</head>

<body>
    <div class="menu">
        <?php include 'navBar.php';?>
    </div>


    <center>
    <div class="col-4 col-s-4">
        <b><h1 align="center">LOGIN as Teacher</h1></b></div></center>
        
<div class="col-4 col-s-4"><center>


    <form name="contactForm" action="controller/signTeacher.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data"><br><br>

                User Name:
                    <input type="text" name="username" id="username" placeholder="Enter your username."><br><br>
                Password:
                    <input type="password" name="password" id="password" placeholder="Enter Password"><br><br>

            <input name="remember" type="checkbox">Remember Me<br /><br />
            <input type="submit" name="submit" value="submit">
            <input type="button" onclick="location.href='Forget.php';" value='Forget Password?'>

             <?php

if (isset($_SESSION['uname'])) {
    setcookie('STATUS', 'OK', time() + 3600, '/');
    header('location: dash.php');
}

?>
    </form></center>
</div>



    <?php include 'Footer.php';?>


</body>
</html>