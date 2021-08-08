
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>
<fieldset style="width: 20%;">
	<legend><h1>SEARCH:</h1></legend>
<table>
	<thead>
		<tr>
			<th>User_id</th>
			<th>User_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="../showTeacher.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				<td><a href="../editTeacher.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="deleteTeacher.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table></fieldset>


</body>
</html>