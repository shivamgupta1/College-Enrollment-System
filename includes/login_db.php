<?php
	
	function hash_password($password, $nonce) {
		$secure = hash_hmac('sha512', $password.$nonce, SITE_KEY);
		return $secure;
	}	

	class login_class {
		protected $db;
		function __construct() {
			$this->db = new mysqli(LOGIN_DB_HOST,LOGIN_DB_USER,LOGIN_DB_PASS,LOGIN_DB_NAME);
			/*if(mysqli_connect_errno()) {
				echo 'Error: Could not connect to the database';
				exit;
			}*/
		}

		function clean($array) {
			foreach($array as &$element) {
				$element = $this->db->real_escape_string($element);			
			}
			return  $array;
		}
		
		function register($redirect) {
			$table_name = 'users';

			if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
				
				$values = $this->clean($_POST);
				//$values = $_POST;

				$rollno = $values['rollno'];
				$fname = $values['fname'];
				$lname = $values['lname'];
				$sex = $values['sex'];
				$date_dob = $values['date_dob'];
				$month_dob = $values['month_dob'];
				$year_dob = $values['year_dob'];
				$father = $values['father'];
				$mother = $values['mother'];
				$contact_number = $values['contact_number'];
				$address_1 = $values['address_1'];
				$address_2 = $values['address_2'];
				$address_3 = $values['address_3'];
				$category = $values['category'];
				$department = $values['department'];
				$programme = $values['programme'];
				$batch = $values['batch'];
				$semester = $values['semester'];
				$password = $values['password'];
				$regdate = $values['date'];
				
				//echo $rollno." ".$name." ".$password." ".$regdate."here<br />";

				//users is the table name
				$query = "select * from $table_name
							where rollno = '".$rollno."'";
				$result = $this->db->query($query);
				if($result) {
					$num_results = $result->num_rows;
					if($num_results > 0) {
						die("This roll number already exists.");
					}
					if(!ctype_alnum($rollno)) {
						die("Roll number can only contain numbers and alphabetical characters.");
					}
					if(strlen($rollno)>20) {
						die("Roll number cannot contain more than 20 characters.");
					}
				}
				$nonce  = md5('very secure'.$rollno.$regdate.NONCE_SALT );
				$password = hash_password($password, $nonce);
				$query = "insert into $table_name
							values ( '".$rollno."', '".$fname."', '".$lname."', '".$sex."', '".
									$date_dob."', '".$month_dob."', '".$year_dob."', '".$father."', '".
									$mother."', '".$contact_number."', '".$address_1."', '".$address_2."', '".$address_3."', '".$category."', '".
									$department."', '".$programme."', '".$batch."', '".
									$semester."', '".$password."', '".$regdate."')";
				
				$result = $this->db->query($query);
	
				if($result) {
					//$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
					//$redirect = str_replace('pages/register.php', $redirect, $url);
					$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
					$redirect = str_replace('pages/register.php', $redirect, $url);
					header("Location: $redirect?register=success");
					exit;
				}
				else {
					die("Unable to register.");
				}
			}
		}
		
		function login($redirect) {
			//echo "here";
			$table_name = 'users';
			if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
				$values = $this->clean($_POST);

				$rollno = $values['rollno'];
				$password = $values['password'];
			
				$query = "select * from $table_name
					where rollno = '".$rollno."'";
				$results = $this->db->query($query);
				if(!$results) {
					return 'invalid';				
				}
				$num_results = $results->num_rows;
				if($num_results == 0) {
					return 'invalid';
				}
				else if($num_results > 1) {
					die("Error while logging in.");
				}
			
				$row = $results->fetch_assoc();

				$nonce = md5('very secure'.$row['rollno'].$row['regdate'].NONCE_SALT);

				$check_pass = hash_password($password, $nonce);

				if($check_pass == $row['password']) {
					$cookie_nonce = md5('cookie'.$rollno.$row['regdate'].COOKIE_SALT);
					$cookie_password = hash_password($check_pass, $cookie_nonce);
					if(isset($_POST['remember'])) {         //logs in users for 30 days
						setcookie('College_enrol_sys[rollno]', $rollno, time()+60*60*24*30, '/', '', '', true);
						setcookie('College_enrol_sys[password]', $cookie_password, time()+60*60*24*30, '/', '', '', true);
					}
					else {
						setcookie('College_enrol_sys[rollno]', $rollno, 0, '/', '', '', true);
						setcookie('College_enrol_sys[password]', $cookie_password, 0, '/', '', '', true);
					}
					$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
					$redirect = str_replace('pages/login.php', $redirect, $url);
					header("Location: $redirect");
					exit;
				}
				else {
					return 'invalid';
				}
			}
			else {
				return 'empty';
			}
		}

		function logout() {
			$roll_out = setcookie('College_enrol_sys[rollno]', '', time()-3600,'/','','',true);
			$pass_out = setcookie('College_enrol_sys[password]', '', time()-3600, '/', '', '', true);

			unset($_COOKIE['College_enrol_sys']);   //very important

			if($roll_out == true && $pass_out == true) {
				return true;
			}
			else {
				return false;
			}
		}

		function redirect_login($current) {
			$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
			$redirect = str_replace($current, 'pages/login.php', $url);
			header("Location: $redirect?msg=login");
			exit;
		}

		function check_login() {
			if(isset($_COOKIE['College_enrol_sys'])) {
				$cookie = $_COOKIE['College_enrol_sys'];
				if(isset($cookie['rollno']) && isset($cookie['password'])) {
					$table_name = 'users';
					$rollno = $cookie['rollno'];
					$password = $cookie['password'];
				
					$query = "select * from $table_name
	        	            where rollno = '".$rollno."'";
        	        
					$results = $this->db->query($query);
					if(!$results) {
						return false;				
					}
					$num_results = $results->num_rows;
					if($num_results == 0) {
						die("Username doesn't exist.");
					}
                			else if($num_results > 1) {
						die("Error while logging in.");
					}

					$row = $results->fetch_assoc();
					$cookie_nonce = md5('cookie'.$row['rollno'].$row['regdate'].COOKIE_SALT);
					$check_password = hash_password($row['password'], $cookie_nonce);
					if($password == $check_password) {
						return true;
					}
					else {
						return false;
					}
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}

		function give_row() {
			$cookie = $_COOKIE['College_enrol_sys'];
			$table_name = 'users';
			$rollno = $cookie['rollno'];
			$password = $cookie['password'];
			
			$query = "select * from $table_name
	                    where rollno = '".$rollno."'";
                
			$results = $this->db->query($query);
			$row = $results->fetch_assoc();
			return $row;
		}
	}

	//Instantiating the class
	$obj = new login_class;
?>
