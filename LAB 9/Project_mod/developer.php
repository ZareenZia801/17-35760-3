<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
   <title>developers info..</title>
</head>
<body>
 
<?php include 'navBar.php';?>

<center>

<div class="col-3 col-s-3">
<img src="ProfilePicLogo.png"style="width: 100px; height: 100px;"><br>
Name: Zareen Zia<br>
ID:17-35760-3<br>
<div id="dev1"></div>
<div id="devH1"></div>
<script>
function showDev(id) 
{

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("dev1").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "http://"+window.location.host+"/php/Project_mod"+"/dev_data.php?id="+id, true);
    xmlhttp.send();
}

function hideDev1() 
{
   document.getElementById("dev1").innerHTML = "";
}


</script>
<button type="button" onclick="showDev('17-35760-3')">Details</button>
<button type="button" onclick="hideDev1()">Hide data</button>
</div>


<div class="col-3 col-s-3">  
<img src="ProfilePicLogo.png"style="width: 100px; height: 100px;"><br>
Name: Wasimul Islam Talukdar<br>
ID:17-33235-1<br>
<div id="dev2"></div>
<div id="devH2"></div>
<script>
function showDev2(id) 
{

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("dev2").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "http://"+window.location.host+"/php/Project_mod"+"/dev_data.php?id="+id, true);
    xmlhttp.send();
}
function hideDev2() 
{
   document.getElementById("dev2").innerHTML = "";
}

</script>
<button type="button" onclick="showDev2('17-33235-1')">Details</button>
<button type="button" onclick="hideDev2()">Hide data</button>
</div>





<div class="col-3 col-s-3">
<img src="ProfilePicLogo.png"style="width: 100px; height: 100px;"><br>
Name:  Mrinmoy Karmokar<br>
ID:17-53654-3<br>
<div id="dev3"></div>
<div id="devH3"></div>
<script>
function showDev3(id) 
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("dev3").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "http://"+window.location.host+"/php/Project_mod"+"/dev_data.php?id="+id, true);
    xmlhttp.send();
}
function hideDev3() 
{
   document.getElementById("dev3").innerHTML = "";
}
</script>
<button type="button" onclick="showDev3('17-53654-3')">Details</button>
<button type="button" onclick="hideDev3()">Hide data</button>
</div>




<div class="col-3 col-s-3">
<img src="ProfilePicLogo.png"style="width: 100px; height: 100px;"><br>
Name:  Tithy Sarkar<br>
ID:17-73474-3<br>
<div id="dev4"></div>
<div id="devH4"></div>
<script>
function showDev4(id) 
{

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("dev4").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "http://"+window.location.host+"/php/Project_mod"+"/dev_data.php?id="+id, true);
    xmlhttp.send();
}
function hideDev4() 
{
   document.getElementById("dev4").innerHTML ="";
}

</script>
<button type="button" onclick="showDev4('17-73474-3')">Details</button>
<button type="button" onclick="hideDev4()">Hide data</button>
</div>














</center><br><br><br><br><br><br><br><br>
<br></center>






<?php include 'Footer.php';?>

</body>
</html>