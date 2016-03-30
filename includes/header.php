<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<style>
		body {
			background-color:#e6e6e6;
		}
		div.header {
			background-color:#4d4d4d;
			border-bottom:thick solid white;
			color:white;
			padding:50px 5px 60px 5px;
			margin:0px;
		}
		span.lt {
			font-size:40px;
			float:left;
		}
		span.rt {
			font-size:20px;
			float:right;
			border-right-style:solid;
			border-right-color:white;
			padding-right:20px;
			padding-left:20px;
		}
		span.rt > a {
			color:#ffbb33;
		}
	</style>
</head>
<body>
	<div class="header">
		<span class="lt">COLLEGE ENROLLMENT SYSTEM</span>
		<span class="rt"><a href="login.php?action=logout">logout</a></span>
		<span class="rt"><?= $row['name'];?></span>
	</div>
