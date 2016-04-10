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
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
		<tr>
			<td>Roll Number (Username): </td>
			<td><input type="text" name="rollno" /></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td>Confirm Password: </td>
			<td><input type="password" name="cpassword" /></td>
		</tr>
		<tr>
			<td>First Name: </td>
			<td><input type="text" name="fname" value=""/></td>
		</tr>
		<tr>
			<td>Middle Name: </td>
			<td><input type="text" name="mname" value="" /></td>
		</tr>
		<tr>
			<td>Last Name: </td>
			<td><input type="text" name="lname" value="" /></td>
		</tr>
		<tr>
			<td>Sex: </td>
			<td>
				<input type="radio" name="gender" value="male" checked />Male&nbsp<input type="radio" name="gender" value="female" />Female
			</td>
		</tr>
		<tr>
			<td>Date of birth: </td>
			<td>
				<select name="date_dob">
					<option value="null">DD</option>
					<?php
						for($i=1; $i<=31; $i++) {
							printf("<option value=\"%02u\"> %02u </option>",$i, $i);
						}
					?>
				}
				</select>
				&nbsp
				<select name="month_dob">
					<option value="null">MM</option>
					<?php
						for($i=1; $i<=12; $i++) {
							printf("<option value=\"%02u\"> %02u </option>",$i, $i);
						}
					?>
				</select>
				&nbsp
				<select name="year_dob">
					<option value="null">YYYY</option>
					<?php
						for($i=2006; $i>=1985; $i--) {
							echo "<option value=\"$i\" > $i </option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Father's Name: </td>
			<td><input type="text" name="father"/></td>
		</tr>
		<tr>
			<td>Mother's Name: </td>
			<td><input type="text" name="mother"/></td>
		</tr>
		<tr>
			<td>Category: </td>
			<td><select>
				<option value="General">General</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				<option value="OBC-NCL">OBC-NCL</option>
			</select></td>
		</tr>
		<tr>
			<td>Department: </td>
			<td>
				<input type="radio" name="department" value="I.T" checked />Information Technology&nbsp&nbsp&nbsp<input type="radio" name="department" value="E.C.E" />Electronics and Communication
			</td>
		</tr>
		<tr>
			<td>Course: </td>
			<td><select name="course">
				<option value="B.Tech">B.Tech</option>
				<option value="M.tech">M.Tech</option>
				<option value="B.Tech-M.Tech Dual">B.Tech-M.Tech Dual</option>
				<option value="P.h.d">P.h.d</option>
			</select></td>
		</tr>
		<tr>
			<td>Batch: </td>
			<td><select name="year">
				<?php
					for($i=2016; $i>=2000; $i--) {
						echo "<option value=\"$i\" > $i </option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>Semester: </td>
			<td><select><?php 
				for($i=1; $i<=8; $i++) {
					echo "<option value=\"$i\" > $i </option>";
				}
			?></select></td>
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