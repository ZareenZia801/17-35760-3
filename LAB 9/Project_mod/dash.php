<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Teacher dashboard</title>

    <style>
        .link {
          padding: 10px 15px;
          background: transparent;
          border: #bccfd8 1px solid;
          margin:  2px;
          cursor: pointer;
          color: #607d8b;
        }
        .disabled {
          cursor: not-allowed;
          color: #bccfd8;
        }
        .current {
          background: #bccfd8;
        }
        .first {
          border-left: #bccfd8 1px solid;
        }
        #pagination {
          margin-top: 20px;
          text-align: center;
        }
        .page-content {
          margin: 0 auto;
          margin-bottom: 60px;
        }
        .pagination-setting {
          padding: 10px;
          margin: 5px 0px 10px;
          border: #bccfd8 1px solid;
          color: #607d8b;
        }
        .tution-card {
          padding: 0;
          margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php include 'navBar.php';?>
<div class="col-3 col-s-3">

<?php
    if (isset($_SESSION['uname'])) {
        echo "<h1>Hello" . "&#160" . $_SESSION['uname'] . "!</h1>";
    } else {
        header("location:SignIn.php");
    }
?>
</div>

<div class="col-6 col-s-6">
    <p>Search available tuitions: <input type="text" id="txt1" onkeyup="getresult(1)" placeholder="Enter your Area..."></p>

    <div class="page-content">
        <div id="pagination-result"></div>
    </div>
</div>

<script>
function getresult(page) {
    var area = document.getElementById("txt1").value;
    console.log(area);

    $.ajax({
        url: "http://"+window.location.host+"/php/Project_mod/getresult_search.php?page="+page+"&area="+area,
        type: "GET",
        success: function(data){
        $("#pagination-result").html(data);
        
        },
        error: function()
        {
            console.log("DATA GET ERROR")
        }
   });
}

getresult(1);
</script>

<?php include 'Footer.php';?>
</body>
</html>