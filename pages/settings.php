<?php 
require('../includes/config.php');
require('../includes/login_db.php');

if(!($obj->check_login())) {
	$obj->redirect_login('pages/settings.php');
};

$row = $obj->give_row();
$obj->update_personal("$row[rollno]");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Courses</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href=""><strong>College Enrollment System</strong></a>
	    </div>
	    <!-- /.navbar-header -->

	    <ul class="nav navbar-top-links navbar-right">
		<li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
		    </a>
		    <ul class="dropdown-menu dropdown-user">
			<li><a href="profile.php"><i class="fa fa-user fa-fw"></i> <?php echo "$row[fname] $row[lname]"?></a>
			</li>
			<li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li><a href="login.php?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</li>
		    </ul>
		    <!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	    </ul>
	    <!-- /.navbar-top-links -->

	    <div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
		    <ul class="nav" id="side-menu">
			<li>
				<a href="http://iiita.ac.in"><img src="../images/iiita.png" height="70px" width="66.1px"/></a>
			</li>
			<li>
			    <div>
				<br />
				<br />
			    </div>
			</li>                       
			<li>
			    <a href="../index.php"><i class="glyphicon glyphicon-home"></i> &nbsp&nbspHome</a>
			</li>
			<li>
			    <a href=""><i class="glyphicon glyphicon-book"></i> &nbsp&nbspCourses</a>
			</li>
			<li>
			    <a href="instructors.php"><i class="glyphicon glyphicon-user"></i> &nbsp&nbspInstructors</a>
			</li>
			<li>
				<a href="#"><i class="glyphicon glyphicon-download-alt"></i> &nbsp&nbspDownloads<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="../files/time_table.pdf"><i class="glyphicon glyphicon-calendar"></i> &nbsp&nbspTime Table</a>
					</li>
					<li>
						<a href="../files/academic_calender.pdf"><i class="glyphicon glyphicon-list-alt"></i> &nbsp&nbspAcademic Calender</a>
					</li>
					<li>
						<a href="../files/fee_structure.pdf"><i class="glyphicon glyphicon-usd"></i> &nbsp&nbspFee Structure</a>
					</li>
					<li>
						<a href="../files/ug_manual.pdf"><i class="glyphicon glyphicon-file"></i> &nbsp&nbspUG manual</a>
					</li>
					<li>
						<a href="../files/pg_manual.pdf"><i class="glyphicon glyphicon-education"></i> &nbsp&nbspPG manual</a>
					</li>
					<li>
						<a href="../files/transport_schedule.pdf"><i class="glyphicon glyphicon-bed"></i> &nbsp&nbspTransport Schedule</a>
					</li>
					<li>
						<a href="../files/telephone_directory.pdf"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp&nbspTelephone Directory</a>
					</li>
				</ul>
			</li>
			<li>
			    <a href="settings.php"><i class="glyphicon glyphicon-wrench"></i> &nbsp&nbspSettings</a>
			</li>
			<li>
				<div>
					<br />
					<br />
				</div>
			</li>
			<li>
			    <a href="login.php?action=logout"><i class="glyphicon glyphicon-off"></i> &nbsp&nbspLog-out</a>
			</li>

		    </ul>
		</div>
		<!-- /.sidebar-collapse -->
	    </div>
	    <!-- /.navbar-static-side -->
	</nav>

	<!-- Page Content -->
	<div id="page-wrapper">
	    <div class="row">
		<div class="col-lg-12">
		    <h1 class="page-header">Settings</h1>
		</div>
		<!-- /.col-lg-12 -->
	    </div>
	    <!-- /.row -->
	    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Edit your profile here
				</div>
				<div class="panel-body">
					<div class="row">
					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="col-lg-6">
								<fieldset>
									<div class="form-group">
										<label for="rollno">Roll no.</label>
										<input class="form-control" type="text" name="rollno" value="<?php echo "$row[rollno]"?>" readonly>
									</div>
								</fieldset>
								<fieldset>
									<div class="form-group">
										<label for="fname">First Name</label>
										<input class="form-control" type="text" name="fname" value="<?php echo "$row[fname]"?>">
									</div>
									<div class="form-group">
										<label for="lname">Last Name</label>
										<input class="form-control" type="text" name="lname" value="<?php echo "$row[lname]"?>">
									</div>
									<div class="form-group">
										<label>Sex:</label>
										<div class="radio">
											<label>
												<input type="radio" name="sex" id="sex" value="male" <?php echo ("$row[sex]"=='Male')?'checked':'' ?>>Male
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="sex" id="sex" value="female" <?php echo ("$row[sex]"=='Female')?'checked':''?>>Female
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Date of Birth:</label>
										<div>
											<div class="col-xs-3">
												<select class="form-control" name="date_dob">
													<option value="<?php echo "$row[date_dob]" ?>"><?php echo "$row[date_dob]" ?></option>
<?php
for($i=1; $i<=31; $i++) {
	printf("<option value=\"%02u\"> %02u </option>",$i, $i);
}
?>
													}
												</select>
											</div>
											<div class="col-xs-3">
												<select class="form-control" name="month_dob">
													<option value="<?php echo "$row[month_dob]" ?>"><?php echo "$row[month_dob]" ?></option>
<?php
for($i=1; $i<=12; $i++) {
	printf("<option value=\"%02u\"> %02u </option>",$i, $i);
}
?>
												</select>
											</div>
											<div class="col-xs-4">
												<select class="form-control" name="year_dob">
													<option value="<?php echo "$row[year_dob]" ?>"><?php echo "$row[year_dob]" ?></option>
<?php
for($i=2006; $i>=1985; $i--) {
	echo "<option value=\"$i\" > $i </option>";
}
?>
												</select>
											</div>
										</div>
									</div>
								</fieldset>
								<br>
								<button type="submit" class="btn btn-default">Save</button>

							</div>
						</form>
					</div>
					<!--row(nested)-->
				</div>
				<!--panel-body-->
			</div>
			<!--panel panel-default-->
		</div>
		<!--col-lg-12-->
	</div>
	<!--row-->
</div>
<!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
