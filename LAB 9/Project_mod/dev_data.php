<?php
$data = file_get_contents("developer.json");
$data = json_decode($data, true);
$id =$_GET['id'];
foreach ($data as $row)
    {

    if ($id ==$row["id"] ) 
    {
        echo "<br><b>E-mail: </b>" . $row["e-mail"];
        echo "<br><b>Institution: </b>" . $row["institution"];
        echo "<br><b>Gender: </b>" . $row["gender"];
        echo "<br><b>Phone no: </b>" . $row["phone"];
        echo "<br><b>Area: </b>" . $row["area"]."<br><br>";   
     }
}
?>
