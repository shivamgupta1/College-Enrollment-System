<?php
	require('includes/config.php');
	require('includes/login_db.php');
	if(isset($_GET['action']) && $_GET['action']=='logout') {
		$loggedout = $obj->logout();
	}
	$logged = $obj->login('index.php'); 
?>

<html>
<head>
<title>Login Form</title>
</head>

<body>
	<div style="width: 960px; background: #fff; border: 1px solid #e4e4e4; padding: 20px; margin: 10px auto;">
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
		<h1>Login</h1>
		<form action="" method="post">
		<table>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="rollno" /></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Login"/></td>
		</tr>
		</table>
		</form>
		<p>Not a member? <a href="register.php">Register here</a></p>
	</div>
</body>
</html>
