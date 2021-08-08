<?php  
require_once 'controller/studentInfo.php';
$student = fetchAllStudent();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset style="width: 80%;">
  <legend><h1>DISPLAY:</h1></legend>
<table>

		
	
	<tbody>
		<?php foreach ($student as $i => $student): ?>
			<tr>
				
				Student's name: <?php echo $student['Name'] ?><br>
				Student's gender: <?php echo $student['Gender'] ?><br>
				Teacher's gender:<?php echo $student['TGender'] ?><br>
				Institution: <?php echo $student['Current_Institution'] ?><br>
			  Class :<?php echo $student['Class'] ?><br>
				Area:<?php echo $student['Area'] ?><br><br><br><br><br>


			</tr>
		<?php endforeach; ?>
		

	</tbody>
</table></fieldset>
</body>
</html>