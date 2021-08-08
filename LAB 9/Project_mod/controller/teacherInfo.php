<?php 

require_once ('model/model.php');

function fetchAllTeacher(){
	return showAllTeacher();

}
function fetchTeacher($username){
	return showTeacher($username);

}
