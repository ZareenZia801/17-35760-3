<?php 

require_once '../model/model.php';

if (deleteTeacher($_GET['id'])) {
    header('Location: ../showAllTeacher.php');
}

 ?>