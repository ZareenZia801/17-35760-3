<?php
require_once 'model_1/model.php';

$row_count = 4;		
$page = 1;

if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$area = $_GET["area"];

$output = '';
$student_rows = showAllStudentWithPagination_Area($page, $row_count, $area);
$student_count = getAllStudentCount_Area($area);


// calculate pagiantion from total number of rows
$total_pages = 0;
if($student_count != 0){
	$total_pages  = ceil($student_count/$row_count);
}
	
// prepare pagination bar
$pagination = '';
if($total_pages>1)
{
	if($page == 1) 
		$pagination = $pagination . '<span class="link disabled">&#60;</span>';
	else
		$pagination = $pagination . '<a class="link" onclick="getresult(\'' . ($page-1) . '\')" >&#60;</a>';
	
	
	if(($page-3)>0) {
		if($page == 1)
			$pagination = $pagination . '<span id=1 class="link current">1</span>';
		else				
			$pagination = $pagination . '<a class="link" onclick="getresult(1)" >1</a>';
	}

	if(($page-3)>1) {
			$pagination = $pagination . '<span class="dot">...</span>';
	}
	
	for($i=($page-2); $i<=($page+2); $i++)	{
		if($i<1) continue;
		if($i>$total_pages) break;
		if($page == $i)
			$pagination = $pagination . '<span id='.$i.' class="link current">'.$i.'</span>';
		else				
			$pagination = $pagination . '<a class="link" onclick="getresult(\'' . $i . '\')" >'.$i.'</a>';
	}
	
	if(($total_pages-($page+2))>1) {
		$pagination = $pagination . '<span class="dot">...</span>';
	}
	if(($total_pages-($page+2))>0) {
		if($page == $total_pages)
			$pagination = $pagination . '<span id=' . ($total_pages) .' class="link current">' . ($total_pages) .'</span>';
		else				
			$pagination = $pagination . '<a class="link" onclick="getresult(\'' . $total_pages .'\')" >' . ($total_pages) .'</a>';
	}
	
	if($page < $total_pages)
		$pagination = $pagination . '<a  class="link" onclick="getresult(\'' . ($page+1) . '\')" >></a>';
	else				
		$pagination = $pagination . '<span class="link disabled">></span>';
}
// return $pagination;
	

// prepare formatted data rows
$table_data = '';
$table_data = "<center><b><h1>View available tutions</h1></b></center><br>";

 foreach ($student_rows as $student)
 { 
	$table_data = $table_data."<fieldset class='tution-card'><div class='col-6 col-s-6'>Class :". $student['Class']."<br>";
    $table_data = $table_data."Institution :". $student['Current_Institution']."<br>";
    $table_data = $table_data."Salary :". $student['Salary']."TK/month<br>";
    $table_data = $table_data." Teacher's gender:".$student['TGender']."<br>";
    $table_data = $table_data."Area:".$student['Area']."<br></div>";
    $table_data = $table_data."<div class='col-6 col-s-6'>Student's name:".$student['Name']."<br>";
    $table_data = $table_data." Student's gender:".$student['Gender']."<br></div></fieldset>";  
 }

$output = $output.'<div id="main-data">'.$table_data.'</div>';

//add pagiantion bar
if (!empty($pagination)) 
{
	$output .= '<div id="pagination">' . $pagination . '</div>';
}

echo $output;
?>

