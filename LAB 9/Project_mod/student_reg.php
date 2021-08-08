<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Registration page!!!</title>
</head>
<div class="menu">
     <?php include 'navBar.php';?>
</div>

<script type="text/javascript">
          function validateForm()

          {
            var minNumberofChars = 5;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,16}$/;
            var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            var onlyLetters = /[^A-Z a-z]/g;
            const mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


            var name = document.Form.name.value;
            var email = document.Form.email.value;
            var username = document.Form.username.value;
            var password = document.Form.password.value;
            var stgender = document.Form.stgender.value;
            var tgender = document.Form.tgender.value;
            var ins = document.Form.ins.value;
            var phone = document.Form.phone.value;
            var area = document.Form.area.value;
            var sal = document.Form.sal.value;
            var dob = document.Form.dob.value;


            if (name == null || name == "")
            {
                alert("Name can't be blank");
                return false;
            }
            else if(onlyLetters.test(name))
            {
              alert("Name can contain letters only");
              return false;
            }
            else if (email == null || email == "")
            {
                alert("Email can't be blank");
                return false;
            }
            else if (!mailformat.test(email))
            {
                alert("Enter valid email");
                return false;
            }
            else if (username == null || username == "")
            {
                alert("Username can't be blank");
                return false;
            }
             else if(regex.test(username))
            {
              alert("Username cannot contain any special character");
              return false;
            }
            else if(password==null || password=="")
            {
              alert("Password can't be blank");
              return false;
            }
            else if(!regularExpression.test(password))
            {
              alert("Password should contain atleast one letter, one number and one special character");
              return false;
            }
            else if(password.length<5)
            {
              alert("Password should be at least 5 characters long");
              return false;
            }
            else if (stgender == null || stgender == "")
            {
                alert("Select Student Gender");
                return false;
            }
            else if (tgender == null || tgender == "")
            {
                alert("Select Teacher Gender");
                return false;
            }
            else if (ins == null || ins == "")
            {
                alert("Enter your Current Institution");
                return false;
            }
            else if (phone == null || phone == "")
            {
              alert("Phone no can't be blank.");
              return false;
            }
            else if (area == null || area == "")
            {
                alert("Area can't be blank");
                return false;
            }
            else if (sal == null || sal == "")
            {
                alert("Salary must be filled");
                return false;
            }
            else if (dob == null || dob == "")
            {
                alert("Select Date of Birth.");
                return false;
            }

        }

    </script>




<body>
    <center>
       <div class="col-10 col-s-10">

            <div class="container" style="width:500px;">
                <fieldset style="width: 400px; ">
                    <legend><b>
                            <h1>Register as Student </h1>
                        </b></legend>

<form name="Form" action="controller/createStudent.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

                        <label>Name</label>
                        <input type="text" name="name" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">

                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">

                        <label>User Name</label>
                        <input type="text" id="username" name="username" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">

                        <label>Password</label>
                        <input type="password" name="password" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">


                        <fieldset>
                            <legend>Select Student Gender</legend>
                            <input type="radio" id="male" name="stgender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="stgender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="stgender" value="other">
                            <label for="other">Other</label><br>
                        </fieldset><hr style="border: 0.1px solid;">

                        <fieldset>
                            <legend>Select Teacher Gender</legend>
                            <input type="radio" id="male" name="tgender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="tgender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="tgender" value="other">
                            <label for="other">Other</label><br>
                        </fieldset><hr style="border: 0.1px solid;">

                        <label>Current Institution</label>
                        <input type="text" name="ins" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">

                     <fieldset>
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
                      </fieldset><hr style="border: 0.1px solid;">

                     <fieldset>
                    <label>Phone No:</label>
                     <input type="number" name = "phone" class="form-control" />
                     </fieldset><hr style="border: 0.1px solid;">


                    <fieldset>
                     <label>Select Area: </label>
                     <select name="area" id="area">
                         <option >none</option>
                        <option >Uttara</option>
                        <option >Banasree</option>
                        <option >Bashundhara R/A</option>
                      </select>
                      </fieldset><hr style="border: 0.1px solid;">


                     <fieldset>
                     <label>Salary Range</label>
                     <input type="text" name = "sal" class="form-control" /><br />
                     </fieldset><hr style="border: 0.1px solid;">


                        <fieldset>
                            <legend>Date of Birth:</legend>
                            <input type="date" name="dob"> <br><br>
                        </fieldset>



                        <input type="submit" name="createStudent" value="Create" class="btn btn-info" />
                        <input type="reset" name="reset" value="reset"><br /><br><br>

                    </form>
                </fieldset><br><br><br><br>
            </div>
        </div>
    </center>
    <div class="menu">
        <?php include 'Footer.php';
?></div>
</body>

</html>