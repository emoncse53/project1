<?php 
     session_start(); 
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'nwu');



	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			if($_SESSION['username'])
			{
				echo "<script type='text/javascript'>alert('You Are Already Loged In')</script>";
			}
			else
			{
			//$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				echo "<script type='text/javascript'>alert('Log In successfully!')</script>";
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: add-course.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		}
	}

	// Add Student
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$std_id = mysqli_real_escape_string($db, $_POST['std_id']);
		$std_name = mysqli_real_escape_string($db, $_POST['std_name']);
		$std_father_name = mysqli_real_escape_string($db, $_POST['std_father_name']);
		$std_mother_name = mysqli_real_escape_string($db, $_POST['std_mother_name']);
		$std_number = mysqli_real_escape_string($db, $_POST['std_number']);
		$std_email = mysqli_real_escape_string($db, $_POST['std_email']);

		// form validation: ensure that the form is correctly filled
		if (empty($std_id)) { array_push($errors, "Student Id is required"); }
		if (empty($std_name)) { array_push($errors, "Student name is required"); }
		if (empty($std_father_name)) { array_push($errors, "Father name is required"); }
		if (empty($std_mother_name)) { array_push($errors, "Mother name is required"); }
		if (empty($std_number)) { array_push($errors, "Number is required"); }
		if (empty($std_email)) { array_push($errors, "Email is required"); }

	

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO `student` (std_id, std_name, std_father_name, std_mother_name, std_number, std_email)
					  VALUES('$std_id', '$std_name', '$std_father_name', '$std_mother_name', '$std_number', '$std_email')";
			mysqli_query($db, $query);
			
			echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
			
		}

	}
	// Add course
	if (isset($_POST['add_crs'])) {
		// receive all input values from the form
		$crs_id = mysqli_real_escape_string($db, $_POST['crs_id']);
		$crs_name = mysqli_real_escape_string($db, $_POST['crs_name']);
		$crs_code = mysqli_real_escape_string($db, $_POST['crs_code']);
		$crs_credit = mysqli_real_escape_string($db, $_POST['crs_credit']);
		$crs_time = mysqli_real_escape_string($db, $_POST['crs_time']);
		$crs_details = mysqli_real_escape_string($db, $_POST['crs_details']);

		// form validation: ensure that the form is correctly filled
		if (empty($crs_id)) { array_push($errors, "Course ID is required"); }
		if (empty($crs_name)) { array_push($errors, "Course Name is required"); }
		if (empty($crs_code)) { array_push($errors, "Course Code is required"); }
		if (empty($crs_credit)) { array_push($errors, "Course Credit is required"); }
		if (empty($crs_time)) { array_push($errors, "Course Time is required"); }
		if (empty($crs_details)) { array_push($errors, "Course Details is required"); }

	

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO `course` (crs_id, crs_name, crs_code, crs_credit, crs_time, crs_details)
					  VALUES('$crs_id', '$crs_name', '$crs_code', '$crs_credit', '$crs_time', '$crs_details')";
			mysqli_query($db, $query);
			
			echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
			
		}

	}

?>