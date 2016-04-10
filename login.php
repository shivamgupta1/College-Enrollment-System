<?php
	require('includes/config.php');
	require('includes/login_db.php');
	if(isset($_GET['action']) && $_GET['action']=='logout') {
		$loggedout = $obj->logout();
	}
	$logged = $obj->login('index.php'); 
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home</title>

	<!-- Google Fonts -->
	<link href='../css/google_roboto_slab.css' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="../ajax/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			
			<h1 id="title" class="hidden">College Enrollment System</h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<?php if($logged=='invalid') : ?>
				<p>Invalid username or password</p>
			<?php endif;?>
			<?php if(isset($_GET['action']) && $_GET['action']=='logout') :?>
				<?php if($loggedout==true) : ?>
					<p>You have been successfully logged out.</p>
				<?php else : ?>
					<p>There was a problem logging you out.</p>
				<?php endif;?>
			<?php endif;?>
			<?php if(isset($_GET['msg']) && $_GET['msg']=='login') : ?>
				<p>You must log in to view this content. Please log in below.</p>
			<?php endif;?>
			<form action="" method="post">
			
			<label for="rollno">Username</label>
			<br/>
			<input type="text" id="rollno" name="rollno">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<input type="submit" value="Login">
			<br/>
			</form>
			<p>Not a member? <a href="register.php">Register here</a></p>
			
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
