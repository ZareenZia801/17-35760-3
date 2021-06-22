<?php


if(!empty($_POST["remember"])) {
    setcookie ("userName",$_POST["userName"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    //echo "Cookies Set Successfuly";
} else {
    setcookie("userName","");
    setcookie("password","");
    //echo "Cookies Not Set";
}

?>




<?php

    session_start();


    if(isset($_POST['submit']))
    {

        $userName = $_POST['userName'];
        $password = $_POST['password'];
        //$gender = $_POST['gender'];
       // $dob = $_POST['dob'];
        //$email=$_POST['e-mail'];


        if(empty($userName) || empty($password)){
            echo "Username/Password is needed";
        }
        else{
            if(isset($_COOKIE['userName']) && isset($_COOKIE['password']))
            {
                if($userName == $_COOKIE['userName'] && $password == $_COOKIE['password'])
                {

                    setcookie('STATUS', 'OK', time()+3600, '/');
                    header('location: dash.php?msg=userName');

                }
                else
                {
                    header('location:Sign.php');
                }
            }
            else
            {
                if(file_exists('task_4.json'))  
                    {  
                    $current_data = file_get_contents('task_4.json');  
                    $array_data = json_decode($current_data, true); 
                    for ($i=0; $i < count($array_data); $i++) 
                    { 
                        if ($array_data[$i]['username']==$userName && $array_data[$i]['password']==$password) 
                        {
                            $_SESSION['uname']= $userName;
                            $_SESSION['password']=$password;
                            $_SESSION['e-mail']=$email;
                            $_SESSION['gender']=$gender;
                            $_SESSION['dob']=$dob;
                            setrawcookie('user', $array_data[$i], time()+3600, '/');
                            header('location:dash.php?username='.$userName);  
                        }
                       else
                           {
                            echo "This account does not exist. Please complete <b>Registration</b> first.....";
                           }        
            } 
                    }
                    }
               
        }
    }
    else
    {
        //echo "invalid request";
        header('location:login.php'); 

    }
?>
