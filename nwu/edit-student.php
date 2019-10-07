<?php 
	include('server.php');

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

	$con= mysqli_connect('localhost', 'root', '', 'nwu');
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	

?>


<?php include 'menu.php';?>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Edit Student</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

<div class="">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default" style="margin: 50px 0;">
					<div class="panel-body" >
						<div class="header" style="width:100%; margin-bottom: 25px;">
							<h2>UPDATE STUDENT INFO</h2>
						</div>
						<?php
						$mysqli = new mysqli('localhost', 'root', '', 'nwu');
						$std_id = $_GET['std_idx'];
						$query = $mysqli->query("SELECT * FROM student WHERE std_id = '$std_id'");
						$row = $query->fetch_assoc();
						if(isset($_POST['update'])){
							$std_id = $_POST['std_id'];
							$std_name = $_POST['std_name'];
							$std_father_name = $_POST['std_father_name'];
							$std_mother_name = $_POST['std_mother_name'];
							$std_number = $_POST['std_number'];
							$std_email = $_POST['std_email'];
							$result = $mysqli->query("UPDATE `student` SET `std_id`='$std_id',`std_name`='$std_name',`std_father_name`='$std_father_name',`std_mother_name`='$std_mother_name',`std_number`='$std_number',`std_email`='$std_email' where std_id='$std_id'" );
						if($result){
						?>


							<div class="alert alert-success fade in alert-dismissable" style="margin-top:20px;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<strong>Success.!</strong> Your data has been updated.
							</div>
							<?php 
						}
						else{ ?>
							<div class="alert alert-danger fade in alert-dismissable" style="margin-top:20px;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
								<strong>Error.!</strong> updating data, try again.
							</div>

							<?php } } ?>

							<form method="post">
								<div class="form-group">
									<label>Student Id</label>
									<input class="form-control" type="text" name="std_id" id="std_id" value="<?php echo $row['std_id'] ?>" >
								</div>
								<div class="form-group">
									<label>Student Name</label>
									<input class="form-control" type="text" name="std_name" id="std_name" value="<?php echo $row['std_name'] ?>">
								</div>
								<div class="form-group">
									<label>Father Name</label>
									<input class="form-control" type="text" name="std_father_name" id="std_father_name" value="<?php echo $row['std_father_name'] ?>">
								</div>
								<div class="form-group">
									<label>Mother Name</label>
									<input class="form-control" type="text" name="std_mother_name" id="std_mother_name" value="<?php echo $row['std_mother_name'] ?>">
								</div>
								<div class="form-group">
									<label>Mobile Number</label>
									<input class="form-control" type="text" name="std_number" id="std_number" value="<?php echo $row['std_number'] ?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="std_email" id="std_email" value="<?php echo $row['std_email'] ?>">
								</div>
								<div class="form-group">
									<button type="submit" name="update" class="btn btn-success" name="reg_user">UPDATE INFO</button>
									<button type="button" class="btn btn-primary" name="reg_user" onclick="location.href='view-student.php'">BACK</button>
								</div>

							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>
