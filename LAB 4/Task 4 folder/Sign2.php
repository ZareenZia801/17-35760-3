<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign In/log in</title>
</head>
<body>
    <div class="menu">
<?php include 'header.php';
?>
</div>
    <fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="sign.php" method="POST">
        <table>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input type="text" name="userName"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr />
        <input name="remember" type="checkbox">Remember Me
        <br/><br/>
        <input type="submit" name="submit" value="Submit">     

        <a href="Forget.php">Forgot Password?</a>
    </form>
</fieldset>
<div class="menu">
      <?php include 'footer.php';
      ?>
</div>

</body>
</html>



