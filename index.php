<?php 
	require('includes/config.php');
	require('includes/login_db.php');
	$obj->check_login('index.php');
	
	$row = $obj->give_row();
	$title = 'Home';
	require('includes/header.php');
?>

	<h1>Member's area</h1>
	<p><b>User's info</b></p>
	<table>
	<tr>
		<td>Roll no.: </td>
		<td><?= $row['rollno']?></td>
	</tr>
	<tr>
		<td>Name: </td>
		<td><?= $row['fname']." ".$row['lname']?></td>
	</tr>
	<tr>
		<td>Sex: </td>
		<td><?= $row['sex'];?></td>
	</tr>
	<tr>
		<td>Date of birth: </td>
		<td><?= $row['date_dob'].'-'.$row['month_dob'].'-'.$row['year_dob'] ?></td>
	</tr>
	<tr>
		<td>Father's Name: </td>
		<td><?= $row['father'] ?></td>
	</tr>
	<tr>
		<td>Mother's Name: </td>
		<td><?= $row['mother']?></td>
	</tr>
	<tr>
		<td>Address: </td>
		<td><?= $row['address_1']?></td>
	</tr>
	<tr>
		<td></td>
		<td><?= $row['address_2']?></td>
	</tr>
	<tr>
		<td></td>
		<td><?= $row['address_3']?></td>
	</tr>
	<tr>
		<td>Category: </td>
		<td><?= $row['category'] ?></td>
	</tr>
	<tr>
		<td>Department: </td>
		<td><?= $row['department']?></td>
	</tr>
	<tr>
		<td>Course: </td>
		<td><?= $row['course']?></td>
	</tr>
	<tr>
		<td>Batch: </td>
		<td><?= $row['batch']?></td>
	</tr>
	<tr>
		<td>Semester: </td>
		<td><?= $row['semester']?></td>
	</tr>
	</table>
	<p>This is members only area, only for logged in users. To logout, <a href="pages/login.php?action=logout">click here</a></p>
</body>
</html>
