<?php
	require('includes/config.php');
	require('includes/login_db.php');
	$obj->register('login.php');
?>

<html>
<head>
	<title>Registration Form</title>
</head>

<body>
	<h1>Register</h1>
	<form action="" method="post">
		<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>Roll Number: </td>
			<td><input type="text" name="rollno"/></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="hidden" name="date" value="<?php echo time(); ?>" /></td>
		<tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Register" /></td>
		</tr>
		</table>
	</form>
	<p></p>
	<p>Already registered? <a href="login.php">Log in here</a></p>
</body>
</html>
