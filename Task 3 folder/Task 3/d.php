<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Part 4 task 3</title>
</head>
<body>
	<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('task_3.json'))  
           {  
                $current_data = file_get_contents('task_3.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('task_3.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
	 <div class="container" style="width:500px;">  
	<fieldset style="width: 400px; "><legend><b>REGISTRATION:</b></legend>
	<form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">
  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">


                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br></fieldset>
                     <fieldset>
                     	<legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br></fieldset>

                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />   
                      <input type="reset" name="reset" value="reset"><br />                    
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form> </fieldset></div>

</body>
</html>