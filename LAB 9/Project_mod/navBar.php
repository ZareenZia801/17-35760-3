<?php

session_start();
?>

<div class="header" id="myHeader">
  <center> <img width="200" height="80" src="abc.png"></center>
</div>

<!-- Css for slideNav -->
<style type="text/css">

   .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #2e004d;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #b366ff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color:  #d9b3ff;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
<body>
<!-- before login -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1 align="center" style="color: whitesmoke;">   LOG-IN As</h1><br>
  <a href="SignIn.php">Teachers</a>
  <a href="studentSignIn.php">Students</a>
  <a href="#">Admin</a>
  <a href="#">Accounts</a>
</div>

<!-- After login -->
<div id="aftermySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="aftercloseNav()">&times;</a>
  <h1 align="center" style="color: whitesmoke;">ACCOUNT</h1><br>
  <a href="dash.php">Dashboard</a>
  <a href="viewProfile.php">View Profile</a>
  <a href="change.php">Change Password</a>
  <a href="#">Payments</a>
  <a href="Logout.php">Log-out</a>
</div>


<!-- before login -->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<!-- After login -->
<script>
function afteropenNav() {
  document.getElementById("aftermySidenav").style.width = "200px";
}

function aftercloseNav() {
  document.getElementById("aftermySidenav").style.width = "0";
}
</script>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>

  <link rel="stylesheet" type="text/css" href="style.css">


<?php

if (isset($_SESSION['uname'])) 
{
   // echo "<div class='col-6 col-s-6'>User Name : <span class='username'>".$_SESSION['uname']."</span></div>";
  
    echo "<div class='col-10 col-s-10'><span style='font-size:20px;cursor:pointer' onclick='afteropenNav()'>&#9776; Account</span></div>";
} 
else 
{
    echo "<p align='center'>";
    echo "<a href='web page.php'>Home page</a>";
    echo "<a href='https://www.facebook.com/tutorsheba.official' target='_blank'>Our facebook page</a>";
    echo "<a href='developer.php'>Developer team</a>";
    echo "<a href='student_reg.php'>Request for a tutor</a>";
    echo "<a href='teacher_reg.php'>Register as tutor</a>";
    echo "<a href='faq.php'>FAQ</a>";
    echo "<p align='right'><span style='font-size:20px;cursor:pointer' onclick='openNav()'>&#9776; LOGIN</span></p>";
}

?>
</p>