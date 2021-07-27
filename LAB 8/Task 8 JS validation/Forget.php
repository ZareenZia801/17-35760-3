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

<script type="text/javascript">

        function validateForm() 
        {
            const regex_pattern =      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            
            var email=document.contactForm.email.value;
            
           if (email == null || email == "") // email = empty?
            {
                alert("Enter your email");
                return false;
            }
            else if (!regex_pattern.test(email)) // email = Z8.A@gmail.com ?
            {
                alert("Enter valid email");
                return false;
            }

        }
        
    </script>

   <center>
   <div class="col-10 col-s-10"><b><p><h1>Forget password for teacher:</h1></p></b>



        <form  name="contactForm"  action="<?php echo $_SERVER['PHP_SELF']; ?>"onsubmit="return validateForm()"method="post">

            E-mail : <input type="text" name="email" placeholder="Enter your email id"><br><br>
            <input type="submit">
            <a href="SignIn.php"><b> Back to login page</b></a>
        </form></div></center>
        </form>

   
</center>
</body>

</html>