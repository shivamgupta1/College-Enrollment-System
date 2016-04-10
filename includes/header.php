<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/header.css">
</head>
<body>
	<div class="header">
		<span class="lt">COLLEGE ENROLLMENT SYSTEM</span>
		<span class="rt"><a href="login.php?action=logout">logout</a></span>
		<span class="rt"><?= $row['fname'];?></span>
	</div>
