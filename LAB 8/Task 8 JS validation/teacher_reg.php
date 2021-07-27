<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Reg page!!!</title>

</head>
<div class="menu">
     <?php include 'navBar.php'; ?>
</div>

<script type="text/javascript">

        function validateForm() 
        {
            var minNumberofChars = 6;
            var maxNumberofChars = 16;
            var regularExpression  =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
            var onlyLetters = /[^A-Z a-z]/g;
            const regex_pattern =      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var name=document.contactForm.name.value;  
            var email=document.contactForm.email.value;
            var username=document.contactForm.username.value;  
            var password=document.contactForm.password.value;
            var gender=document.contactForm.gender.value;
            var ins=document.contactForm.ins.value;  
            var dep=document.contactForm.dep.value;
            var dob=document.contactForm.dob.value;
            var image=document.contactForm.image.value;


            if (name == null || name == "") // name = empty?
            {
                alert("Enter your Fullname.");
                return false;
            }
            else if(onlyLetters.test(name)) // name = ZareenZia(no white space) ?
            {  
              alert("Name can contain letters only");  
              return false;  
            }
            else if (email == null || email == "") // email = empty?
            {
                alert("Enter your email");
                return false;
            }
            else if (!regex_pattern.test(email)) // email = Z8.A@gmail.com ?
            {
                alert("Enter valid email");
                return false;
            }
            else if (username == null || username == "") // username = empty?
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
            else if (gender == null || gender == "") // gender = empty?
            {
                alert("Select Gender.");
                return false;
            }
            else if (ins == null || ins == "") // ins = empty?
            {
                alert("Enter your Current Institution.");
                return false;
            }
            else if(onlyLetters.test(ins)) // ins = AIUB(no white space) ?
            {  
              alert("Enter Valid Institution name.");  
              return false;  
            }
            else if (dep == null || dep == "") // department = empty?
            {
                alert("Enter the field you are studing in.");
                return false;
            } 
              else if(onlyLetters.test(dep)) // dep = CSE(no white space) ?
            {  
              alert("Enter Valid Department name.");  
              return false;  
            }
            else if (dob == null || dob == "") // dob = empty?
            {
                alert("Select Date of Birth.");
                return false;
            }
            else if (image == null || image == "") // picture = empty?
            {
                alert("Add picture.");
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
                            <h1>New Teacher Registration </h1>
                        </b></legend>


        <form name="contactForm" action="controller/createTeacher.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
            
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
                            <legend>Gender</legend>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label><br>
                        </fieldset><hr style="border: 0.1px solid;">

                        <label>Current Institution</label>
                        <input type="text" name="ins" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">

                        <label>Department</label>
                        <input type="text" name="dep" class="form-control" /><br />
                        <hr style="border: 0.1px solid;">

                        <fieldset>
                            <legend>Date of Birth:</legend>
                            <input type="date" name="dob"> <br><br>
                        </fieldset>

                        <fieldset>
                            <legend>Add Picture:</legend>
                            <input type="file" name="image"> <br><br>
                        </fieldset><hr style="border: 0.1px solid;">

                        <input type="submit" name="createTeacher" value="Create" class="btn btn-info" />
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