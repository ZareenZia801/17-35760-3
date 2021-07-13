<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createTeacher.php" method="POST" enctype="multipart/form-data">
 <fieldset style="width: 20%;">
  <legend><h1>ADD TEACHER:</h1></legend>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="surname">Email:</label><br>
  <input type="text" id="email" name="email"><br>

  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>

  <label for="name">Gender:</label><br>

  <input type="radio" id="Male" name="gender" value="Male">
  <label for="Male">Male</label>

  <input type="radio" id="Female" name="gender" value="Female">
  <label for="Female">Female</label>

  <input type="radio" id="other" name="gender" value="other">
  <label for="other">other</label><br>


  <label for="name">Current Institution:</label><br>
  <input type="text" id="ins" name="ins"><br>

  <label for="name">Department:</label><br>
  <input type="text" id="dep" name="dep"><br>

  <legend>Date of Birth:</legend>
  <input type="date" name="dob"> <br><br>

  <input type="file" name="image"><br><br>

  <input type="submit" name = "createTeacher" value="Create">

  <input type="reset"> </fieldset>
</form> 

</body>
</html>

