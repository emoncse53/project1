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
           <h2>Gallery</h2>
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
						$crs_id = $_GET['crs_idx'];
						$query = $mysqli->query("SELECT * FROM course WHERE crs_id = '$crs_id'");
						$row = $query->fetch_assoc();
						if(isset($_POST['updat'])){
							$crs_id = $_POST['crs_id'];
							$crs_name = $_POST['crs_name'];
							$crs_code = $_POST['crs_code'];
							$crs_credit = $_POST['crs_credit'];
							$crs_time = $_POST['crs_time'];
							$crs_details = $_POST['crs_details'];
							$result = $mysqli->query("UPDATE `course` SET `crs_id`='$crs_id',`crs_name`='$crs_name',`crs_code`='$crs_code',`crs_credit`='$crs_credit',`crs_time`='$crs_time',`crs_details`='$crs_details' where crs_id='$crs_id'" );
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
									<label>Course ID</label>
									<input class="form-control" type="text" name="crs_id" id="crs_id" value="<?php echo $row['crs_id'] ?>" readonly>
								</div>
								<div class="form-group">
									<label>Course Name</label>
									<input class="form-control" type="text" name="crs_name" id="crs_name" value="<?php echo $row['crs_name'] ?>">
								</div>
								<div class="form-group">
									<label>Course Code</label>
									<input class="form-control" type="text" name="crs_code" id="crs_code" value="<?php echo $row['crs_code'] ?>">
								</div>
								<div class="form-group">
									<label>Course Credit</label>
									<input class="form-control" type="text" name="crs_credit" id="crs_credit" value="<?php echo $row['crs_credit'] ?>">
								</div>
								<div class="form-group">
									<label>Course Time</label>
									<input class="form-control" type="text" name="crs_time" id="crs_time" value="<?php echo $row['crs_time'] ?>">
								</div>
								<div class="form-group">
									<label>Course Details</label>
									<input class="form-control" type="text" name="crs_details" id="crs_details" value="<?php echo $row['crs_details'] ?>">
								</div>
								<div class="form-group">
									<button type="submit" name="updat" class="btn btn-success" name="reg_user">UPDATE INFO</button>
									<button type="button" class="btn btn-primary" name="reg_user" onclick="location.href='view-course.php'">BACK</button>
								</div>

							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>
