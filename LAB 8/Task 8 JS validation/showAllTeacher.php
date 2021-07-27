<?php  
require_once 'controller/teacherInfo.php';

$teacher = fetchAllTeacher();


    include "nav.php";



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

		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Current_Institution</th>
			<th>Department</th>
			<th>Date of Birth</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	
	<tbody>
		<?php foreach ($teacher as $i => $teacher): ?>
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
				<td><a href="editTeacher.php?id=<?php echo $teacher['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteTeacher.php?id=<?php echo $teacher['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
</table></fieldset>
</body>
</html>