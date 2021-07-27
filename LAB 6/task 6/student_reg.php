<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
     <meta charset="utf-8">
     <title>Reg page!!!</title>
</head>
<div class="menu">
<?php include 'navBar.php';
?>
</div>
<body> <center>

<div class="col-10 col-s-10">
 
      <div class="container" style="width:500px;">  
     <fieldset style="width: 400px; "><legend><b><h1>Request for a tutor:</h1></b></legend>



           <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">

                     <?php   
               //if(isset($error))  
                   //  {  
                   //       echo $error;  
                    // }  
                    // ?>  
                     <br />   



                     <label>Title: </label>  
                     <input type="text" name="title" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     <label>Student Name: </label>  
                     <input type="text" name="name" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">
  
                     <label>E-mail:</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     <label>Institution:</label>
                     <input type="text" name = "ins" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     <label>Select your medium: </label>
                     <select name="medium" id="medium">
                         <option >none</option>
                        <option >Bangla</option>
                        <option >English</option>
                      </select>
<br /><hr style="border: 0.1px solid;">

                       <label>Select Student's class: </label>
                     <select name="class" id="class">
                         <option >none</option>
                        <option >Class 1</option>
                        <option >Class 2</option>
                        <option >Class 3</option>
                        <option >Class 4</option>
                        <option >Class 5</option>
                        <option >Class 6</option>
                        <option >Class 7</option>
                        <option >Class 8</option>
                        <option >Class 9</option>
                        <option >Class 10</option>
                      </select>
<br /><hr style="border: 0.1px solid;">

                     <label>Phone No:</label>
                     <input type="text" name = "phone" class="form-control" />
                     <br /><hr style="border: 0.1px solid;">

               

                     <label>Select Area: </label>
                     <select name="area" id="area">
                         <option >none</option>
                        <option >Uttara</option>
                        <option >Banasree</option>
                        <option >Bashundhara R/A</option>
                      </select>

                      <br /><hr style="border: 0.1px solid;">

                     <label>Salary Range</label>
                     <input type="text" name = "sal" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">

                     


                    <fieldset>
                    <legend>Select Student Gender</legend>
                    <input type="radio" id="male" name="stgender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="stgender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="stgender" value="other">
                     <label for="other">Other</label><br></fieldset>


                      <br /><hr style="border: 0.1px solid;">
                     <fieldset>
                    <legend>Select Teacher Gender</legend>
                    <input type="radio" id="male" name="tgender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="tgender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="tgender" value="other">
                     <label for="other">Other</label><br></fieldset>
                       <hr style="border: 0.1px solid;">

                     <label>Days per week</label>
                     <input type="text" name = "days" class="form-control" /><br />
                     <hr style="border: 0.1px solid;">



          <fieldset>
                <legend>Date of Birth:</legend>
                 <input type="date" name="dob"> <br><br></fieldset><br>
                 <hr style="border: 0.1px solid;">

                 Upload Picture:
                 <input type="file" name="image">
                 <hr style="border: 0.1px solid;">

                 <input type="submit" name = "createStudent" value="Create">
                 <input type="reset"> 
               </form> 
          

                </form> </fieldset><br><br><br><br></div></div>
</center>
<div class="menu">
<?php include 'Footer.php';
?></div>
</body>
</html>