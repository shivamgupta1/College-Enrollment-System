<?php
	require('../includes/config.php');
	require('../includes/login_db.php');
	$obj->register('pages/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
    	body {
    		background: url("../images/photo_bg.jpg") no-repeat center center fixed;
			background-size: cover;
    	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="" >College Enrollment System</a>
        </div>
        <a href="http://iiita.ac.in"><img src="../images/logo.png" class="nav navbar-top-links navbar-right" width="350px" height="49px"></a>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="col-md-7 col-md-offset-2">
            	<div class="login-panel panel panel-default">
                	<div class="panel-heading">
                    	<h3 class="panel-title">Registration</h3>
                	</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<fieldset>
								<div class="form-group">
									<label class="col-sm-4 control-label">Roll Number (Username): </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="eg. iit2014001" type="text" name="rollno" autofocus/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Password: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="Password" type="password" name="password" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Confirm Password: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="Retype Password" type="password" name="cpassword" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">First Name: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="eg. John" type="text" name="fname" value=""/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Last Name: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="eg. Miller" type="text" name="lname" value="" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Sex: </label>
									<div class="col-sm-8">
									    <label class="radio-inline">
                                            <input type="radio" name="sex" value="Male" checked>Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" value="Female">Female
                                        </label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Date of birth: </label>
									<div class="col-sm-8">
										<div class="col-xs-3">
											<select class="form-control" name="date_dob">
												<option value="null">DD</option>
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
												<option value="null">MM</option>
												<?php
													for($i=1; $i<=12; $i++) {
														printf("<option value=\"%02u\"> %02u </option>",$i, $i);
													}
												?>
											</select>
										</div>
										<div class="col-xs-4">
											<select class="form-control" name="year_dob">
												<option value="null">YYYY</option>
												<?php
													for($i=2006; $i>=1985; $i--) {
														echo "<option value=\"$i\" > $i </option>";
													}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Father's Name: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="Father's name" type="text" name="father"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Mother's Name: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="Mother's name" type="text" name="mother"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Category: </label>
									<div class="col-sm-4">
										<select class="form-control"name="category">
											<option value="General">General</option>
											<option value="SC">SC</option>
											<option value="ST">ST</option>
											<option value="OBC-NCL">OBC-NCL</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Address: </label>
									<div class="col-sm-8">
										<input class="form-control" placeholder="House no." type="text" name="address_1" />
										<input class="form-control" placeholder="City" type="text" name="address_2" />
										<input class="form-control" placeholder="Zip code" type="text" name="address_3" />
									</div>
								</div>
								<div class="form-group">	
									<label class="col-sm-4 control-label">Department: </label>
									<div class="col-sm-8">
                                        <div class="radio">
                                            <label>
                                          	  <input type="radio" name="department" value="I.T" checked>Information Technology
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="department" value="E.C.E">Electronics and Communication
                                            </label>
                                        </div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Course: </label>
									<div class="col-sm-3">
										<select class="form-control" name="course">
											<option value="B.Tech">B.Tech</option>
											<option value="M.tech">M.Tech</option>
											<option value="B.Tech-M.Tech Dual">B.Tech-M.Tech Dual</option>
											<option value="P.h.d">P.h.d</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Batch: </label>
									<div class="col-sm-3">
										<select class="form-control" name="batch">
											<?php
												for($i=2016; $i>=2000; $i--) {
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
										<input type="submit" value="Register" class="btn btn-lg btn-success btn-block"/>
									</div>
								</div>
							</fieldset>
						</form>
						<label>Already registered? <a href="login.php">Log in here</a></label>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>