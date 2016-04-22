<?php 
require('../includes/config.php');
require('../includes/login_db.php');

if(!($obj->check_login())) {
	$obj->redirect_login('pages/edit_profile.php');
};

$row = $obj->give_row();

//call function here
$obj->update_personal($row['rollno']);

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
	$row = $_POST;
}

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
    <title>Edit Profile</title>

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
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #d0e1e1">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="../index.php"><strong>College Enrollment System</strong></a>
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
			    <a href="courses.php"><i class="glyphicon glyphicon-book"></i> &nbsp&nbspCourses</a>
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
		    	<h1 class="page-header">Edit Profile</h1>
			</div>
			<!-- /.col-lg-12 -->
	    </div>
	    <!-- /.row -->
	    <div class="row">
			<div class="col-md-7 col-md-offset-1">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	<h3 class="panel-title">Update your info</h3>
                	</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
							<fieldset>
								<legend>Login Information</legend>
								<div class="form-group">
									<label class="col-sm-4 control-label">Roll Number (Username): </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="rollno" value="<?= $row['rollno']?>" autofocus readonly/>
									</div>
							</fieldset>
							<br />
							<fieldset>
								<legend>Personal Information</legend>

								<div class="form-group">
									<label class="col-sm-4 control-label">First Name: </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="fname" value="<?= $row['fname']?>" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Last Name: </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="lname" value="<?= $row['lname']?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Sex: </label>
									<div class="col-sm-8">
									    <label class="radio-inline">
                                            <input type="radio" name="sex" value="Male" <?php if($row['sex']=="Male") echo 'checked';?>>Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" value="Female" <?php if($row['sex']=="Female") echo 'checked';?>>Female
                                        </label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Date of birth: </label>
									<div class="col-sm-8">
										<div class="col-xs-4">
											<select class="form-control" name="date_dob">
												<option value="null">DD</option>
												<?php
													for($i=1; $i<=31; $i++) {
														if($i==$row['date_dob'])
															printf("<option value=\"%02u\" selected> %02u </option>",$i, $i);
														else
															printf("<option value=\"%02u\"> %02u </option>",$i, $i);
													}
												?>
											}
											</select>
										</div>
										<div class="col-xs-4">
											<select class="form-control" name="month_dob">
												<option value="null">MM</option>
												<?php
													for($i=1; $i<=12; $i++) {
														if($i==$row['month_dob'])
															printf("<option value=\"%02u\" selected> %02u </option>",$i, $i);
														else
															printf("<option value=\"%02u\" > %02u </option>",$i, $i);
													}
												?>
											</select>
										</div>
										<div class="col-xs-4">
											<select class="form-control" name="year_dob">
												<option value="null">YYYY</option>
												<?php
													for($i=2006; $i>=1985; $i--) {
														if($i==$row['year_dob'])
															echo "<option value=\"$i\" selected> $i </option>";
														else
															echo "<option value=\"$i\" > $i </option>";
													}
												?>
											</select>
										</div>
									</div>
								</div>
							</fieldset>
							<br />
							<fieldset>
								<legend>Parents'/Guardian's Information</legend>
								<div class="form-group">
									<label class="col-sm-4 control-label">Father's Name: </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="father" value="<?= $row['father']?>" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Mother's Name: </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="mother" value="<?= $row['mother']?>" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Contact Number: </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="contact_number" value="<?= $row['contact_number']?>" required	/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Address: </label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="address_1" value="<?= $row['address_1']?>"/>
										<input class="form-control" type="text" name="address_2" value="<?= $row['address_2']?>"/>
										<input class="form-control" type="text" name="address_3" value="<?= $row['address_3']?>"/>
									</div>
								</div>
							</fieldset>
							<br />
							<fieldset>
								<legend>Academic Information</legend>
								<div class="form-group">
									<label class="col-sm-4 control-label">Category: </label>
									<div class="col-sm-4">
										<select class="form-control"name="category">
											<option value="General" <?php if($row['category']=="General") echo 'selected';?>>General</option>
											<option value="SC" <?php if($row['category']=="SC") echo 'selected';?>>SC</option>
											<option value="ST" <?php if($row['category']=="ST") echo 'selected';?>>ST</option>
											<option value="OBC-NCL" <?php if($row['category']=="OBC-NCL") echo 'selected';?>>OBC-NCL</option>
										</select>
									</div>
								</div>								
								<div class="form-group">	
									<label class="col-sm-4 control-label">Department: </label>
									<div class="col-sm-8">
                                        <div class="radio">
                                            <label>
                                          	  <input type="radio" name="department" value="I.T" <?php if($row['department']=="I.T") echo 'checked';?>>Information Technology
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="department" value="E.C.E" <?php if($row['department']=="E.C.E") echo 'checked';?>>Electronics and Communication
                                            </label>
                                        </div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Programme: </label>
									<div class="col-sm-5">
										<select class="form-control" name="programme">
											<option value="B.Tech" <?php if($row['programme']=="B.Tech") echo 'selected';?>>B.Tech</option>
											<option value="M.tech" <?php if($row['programme']=="M.Tech") echo 'selected';?>>M.Tech</option>
											<option value="B.Tech-M.Tech Dual" <?php if($row['programme']=="B.Tech-M.Tech Dual") echo 'selected';?>>B.Tech-M.Tech Dual</option>
											<option value="P.h.d" <?php if($row['programme']=="P.h.d") echo 'selected';?>>P.h.d</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Batch: </label>
									<div class="col-sm-3">
										<select class="form-control" name="batch">
											<?php
												for($i=2016; $i>=2000; $i--) {
													if($row['batch']==$i)
														echo "<option value=\"$i\" selected> $i </option>";
													else
														echo "<option value=\"$i\" > $i </option>";
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Semester: </label>
									<div class="col-sm-3">
										<select class="form-control" name="semester"><?php 
											for($i=1; $i<=8; $i++) {
												if($row['semester']==$i)
													echo "<option value=\"$i\" selected> $i </option>";
												else
													echo "<option value=\"$i\" > $i </option>";
											}
										?>
										</select>
									</div>
								</div>
								<input type="hidden" name="date" value="<?php echo time(); ?>" />
								<div class="form-group"></div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-7">
										<input type="submit" value="Update" class="btn btn-lg btn-success btn-block"/>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-5">
										<p><a href="profile.php" class="btn btn-lg btn-warning btn-block">Cancel</a></p>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
		</div>
		<!--row-->
	</div>
	<!--page wrapper-->
</div>
<!--wrapper -->

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
