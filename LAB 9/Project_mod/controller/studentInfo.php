<?php 

require_once ('model_1/model.php');

function fetchAllStudent(){
	return showAllStudent();

}
function fetchStudent($username){
	return showStudent($username);

}
