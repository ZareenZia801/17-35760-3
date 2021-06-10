<!DOCTYPE html>
<html>
<head>
	<style>
	.error {color: #FF0000;}
    </style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	$nameErr = $emailErr = $genderErr =$degreeErr =$bgErr = $dobErr = "";
    $name = $email = $gender = $degree = $bg = $dd =$mm =$yyyy = "";


//NAME
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name = "";
    }
  }


//EMAIL
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email = "";
    }
  }

//DOB
  if (empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"])) 
     {
       $dobE = "All information is required";
       $dd = test_input($_POST["dd"]);
       $mm = test_input($_POST["mm"]);
       $yyyy = test_input($_POST["yyyy"]);
     } 
     else 
     {
     	$dd = test_input($_POST["dd"]);
        $mm = test_input($_POST["mm"]);
        $yyyy = test_input($_POST["yyyy"]);

      if ( !filter_var($dd,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 
            'max_range' => 31
        )))|!filter_var($mm,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 
            'max_range' => 12
        )))|!filter_var($yyyy,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1953, 
            'max_range' => 1998
        ))))
        {
          $dobE = "Invalid DOB format";
          //$dd="" $mm="" $yyyy=""
          $dd= $mm=$yyyy="";
        }
    }
//Gerder
    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

//Degree
if(!isset($_POST["degree"]))
  {
    $degreeErr="Must be selected";    
  }
  else if (sizeof($_POST["degree"])<2)
  {
    $degreeErr="At least two must be selected";
  }
  else
  {
  	$degree ="";
  }
//Blood group
  if(!isset($_POST["bg"]))
  {
    $bgErr="Must be selected";
  }
  else 
  {
    if($_POST["bg"]=="blank")
    {
      $bgErr="Must be selected";
    }
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>

<h2>PHP Form </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <fieldset style="width: 300px; ">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span><hr style="border: 0.1px solid;"></fieldset>
  <br><br>
 <fieldset style="width: 300px; ">
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span><hr style="border: 0.1px solid;"></fieldset>
  <br><br>
  <fieldset style="width: 300px; ">
  Date of Birth:
  <table>
  <tr style="text-align: center;">
  <th style="font-weight: normal;"><label for="dd" >dd</label></th>
  <th></th>
  <th style="font-weight: normal;"><label for="mm" >mm</label></th>
  <th></th>
  <th style="font-weight: normal;"><label for="yyyy" >yyyy</label></th>
  <th></th>
</tr>
<tr>
<td><input type="text" name="dd" style="width: 30px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width: 30px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width: 30px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 10px"><span class="error">* <?php echo $dobErr;?></span></td>
</tr>
</table><hr style="border: 0.1px solid;"></fieldset>
<br>
<fieldset style="width: 300px; ">
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
<hr style="border: 0.1px solid;"></fieldset>
  <br><br>
<fieldset style="width: 300px; ">
  Degree:
  <input type="checkbox" id="degree" name="degree[]" value="ssc"> SSC
  <input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
  <input type="checkbox" id="degree" name="degree[]" value="bsc"> BSc
  <input type="checkbox" id="degree" name="degree[]" value="msc"> MSc 
  <span class="error" >* <?php echo $degreeErr;?></span> <hr style="border: 0.1px solid;"></fieldset>     
  <br> <br>
<fieldset style="width: 300px; ">
  Blood Group:
  <select name="bg" id="bg">
  	<option >Select a Blood Group</option>
    <option >A+</option>
    <option >B+</option>
    <option >AB+</option>
    <option >O+</option>
  </select>
  <span class="error" >* 
  	<?php 
  	echo $bgErr;
    ?>
  </span><hr style="border: 0.1px solid;">
</fieldset>

  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>OUTPUT:</h2>";

echo  "Name:";
echo  $name;
echo "<br>";

echo "E-mail:"; 
echo $email;
echo "<br>";

echo  "Date of Birth:";
echo $dd;
echo "/";
echo $mm;
echo "/";
echo $yyyy;
echo "<br>";

echo "Sex:"; 
echo $gender;
echo "<br>";

echo "Degree:"; 
echo $degree;
echo "<br>";

echo "Blood Group:"; 
echo $bg;
echo "<br>";
?>

</body>
</html>