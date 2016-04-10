<?php 
	require('includes/config.php');
	require('includes/login_db.php');
	$logged = $obj->check_login();

	if($logged == false) {
		header("Location: http://localhost/login.php?msg=login");
		exit;
	}
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
		<td><?= $row['fname']?></td>
	</tr>
	</table>
	<p>This is members only area, only for logged in users. To logout, <a href="login.php?action=logout">click here</a></p>
</body>
</html>
