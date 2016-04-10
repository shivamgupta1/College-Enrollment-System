<?php
	require('includes/config.php');
	require('includes/login_db.php');
	$obj->register('login.php');
	
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Register</title>

	<!-- Google Fonts -->
	<link href='../css/google_roboto_slab.css' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style_register.css">

	<script src="../ajax/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			
			<h1 id="title" class="hidden">Registration Form</h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Registration</h2>
			</div>
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			
			<label for="rollno">Roll Number (Username)</label>
			<br/>
			<input type="text" id="rollno" name="rollno">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<label for="cpassword">Confirm Password</label>
			<br/>
			<input type="password" id="cpassword" name="cpassword">
			<br/>
			<label for="fname">First Name</label>
			<br/>
			<input type="text" id="fname" name="fname">
			<br/>
			<label for="lname">Last Name</label>
			<br/>
			<input type="text" id="lname" name="lname">
			<br/>
			<label for="sex">Gender</label>
			<br/>
			<input type="radio" name="sex" id="sex" value="Male" checked>Male&nbsp<input type="radio" name="sex" value="Female">Female
			<br/>
			<label for="date_dob">Date of Birth</label>
			<br/>
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
			<br/>
			<br/>

			<label for="father">Father's Name</label>
			<br/>
			<input type="text" name="father" id="father"/>
			<br/>

			<label for="mother">Mother's Name</label>
			<br/>
			<input type="text" name="mother" id="mother"/>
			<br/>
			<label for="category">Category</label>
			<br/>
			<select name="category" id="category">
				<option value="General">General</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				<option value="OBC-NCL">OBC-NCL</option>
			</select>
			<br/>
			<br/>
			
			<label for="address">Address</label>
			<br/>
			<input type="text" id="address" name="address_1">
			<br/>
			<input type="text" id="address" name="address_2">
			<br/>
			<input type="text" id="address" name="address_3">
			<br/>

			<label for="department">Department</label>
			<br/>
			<select name="department" id="department">
				<option value="I.T">Information Technology</option>
				<option value="E.C.E">Electronics and Communication</option>
			</select>			
<br/>
			<br/>

			<label for="course">Course</label>
			<br/>
			<select name="course" id="course">
				<option value="B.Tech">B.Tech</option>
				<option value="M.tech">M.Tech</option>
				<option value="B.Tech-M.Tech Dual">B.Tech-M.Tech Dual</option>
				<option value="P.h.d">P.h.d</option>
			</select>
			<br/>
			<br/>
			
			<label for="batch">Batch</label>
			</br>
			<select name="batch" id="batch">
				<?php
					for($i=2016; $i>=2000; $i--) {
						echo "<option value=\"$i\" > $i </option>";
					}
				?>
			</select>
			</br>
<br/>
			<label for="semester">Semester</label>
			<br/>
			<select name="semester" id="semester"><?php 
				for($i=1; $i<=8; $i++) {
					echo "<option value=\"$i\" > $i </option>";
				}
?></select>
			<br/>
<br/>
			<input type="hidden" name="date" value="<?php echo time(); ?>" />
					
			<input type="submit" value="Register">
			<br/>
			</form>
			<p>Already a member? <a href="login.php">Login here</a></p>
			
		</div>
		
		
	</div>
	<div id="footer">
		<h2 style="color: red;"><a href="docs/Abstract.docx">About this project</a></h2>
	</div>

</body>
<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
