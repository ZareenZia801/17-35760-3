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

<body>
    <center>
       <div class="col-9 col-s-9">
        
            <div class="container" style="width:500px;">
                <fieldset style="width: 400px; ">
                    <legend><b>
                            <h1>New Teacher Registration </h1>
                        </b></legend>
        <form action="controller/createTeacher.php" method="POST" enctype="multipart/form-data">
            
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
                </fieldset>
            </div>
        </div>
    </center>
    <div class="menu">
        <?php include 'Footer.php';
?></div>
</body>

</html>