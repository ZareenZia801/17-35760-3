<!DOCTYPE html>
<html>
<head>
  <style>
  .error {color: #FF0000;}
    </style>
  <meta charset="utf-8">
  <title>Part 1 task 3</title>
</head>
<body>
  <?php
  $nameErr = $passErr  = "";
    $name = $pass = "";
    $specialChars = preg_match('@[^\w]@', $pass);


//NAME
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  
  else 
  {
    $name = test_input($_POST["name"]);
    // check if User Name contains alpha numeric characters, period, dash or underscore
    if (!preg_match("/^[@#_*.0-9a-zA-Z]*$/",$name)) 
    {
      $nameErr = "User Name can contain alpha numeric characters, period, dash or underscore only. No white space allowed!";
      $name = "";
    }

  }

if(!isset($_POST["pass"]))
  {
if(!$specialChars || strlen($pass) < 8) 
{
    $passErr= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}
else
{
    echo 'Strong password.';
}
}

    }




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <fieldset style="width: 300px; "><legend><b>LOG IN:</b></legend>
  Name: <input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter Name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 
  Password: <input type="text" name="pass" value="<?php echo $pass;?>"placeholder="Enter password">
   <span class="error">* <?php echo $passErr;?></span>

  <hr style="border: 0.1px solid;">
  <input type="checkbox" id="rme" name="rme" value="rme">
  <label for="rme"> Remember Me </label>
  <a href="b.php">Forgot password?</a></p><br>
  <a href="z.php">submit</a>
    
  <a href="z.php">
    <input type="submit" value="submit" name="submit">
  </a>

</fieldset>
</form>

</body>
</html>