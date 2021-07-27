<?php  
require_once 'controller/teacherInfo.php';

$teacher = fetchTeacher($_GET['id']);
    include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Gender</th>
		<th>Current_Institution</th>
		<th>Department</th>
		<th>Date of birth</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showTeacher.php?id=<?php echo $teacher['ID'] ?>"><?php echo $teacher['Name'] ?></a></td>
		<td><?php echo $teacher['Email'] ?></td>
		<td><?php echo $teacher['Username'] ?></td>
		<td><?php echo $teacher['Password'] ?></td>
		<td><?php echo $teacher['Gender'] ?></td>
		<td><?php echo $teacher['Current_Institution'] ?></td>
		<td><?php echo $teacher['Department'] ?></td>
		<td><?php echo $teacher['DOB'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $teacher['image'] ?>" alt="<?php echo $teacher['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>