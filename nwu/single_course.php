<?php 
	include('server.php');


	$con= mysqli_connect('localhost', 'root', '', 'nwu');
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	

?>

<?php include ('menu.php') ?>

 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Single Course</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Single Course</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

<!--Student Table Start-->
<div class="view-student">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-sm text-center" style="border: 2px solid #333">
					
					<tbody>
						
							<?php
								$mysqli = new mysqli('localhost', 'root', '', 'nwu');
								$crs_id = $_GET['crs_idx'];
								$query ="SELECT * FROM course WHERE crs_id = '$crs_id'";

								$run = mysqli_query($con,$query);

								while($row=mysqli_fetch_array($run))
								{		
									$crs_id = $row[0];							
									$crs_name = $row[1];
									$crs_code = $row[2];
									$crs_credit = $row[3];
									$crs_time = $row[4];
									$crs_details = $row[5];
							?>

						<tr>
							<th style="width: 20%" class="text-center" scope="col">Course ID</th>
							<th style="width: 80%"><?php echo $crs_id; ?></th>
						</tr>
						<tr>
							<th class="text-center" scope="col">Course Name</th>
							<th><?php echo $crs_name; ?></th>
						</tr>
						<tr>
							<th class="text-center" scope="col">Course Code</th>
							<th><?php echo $crs_code; ?></th>
						</tr>
						<tr>
							<th class="text-center" scope="col">Course Credit</th>
							<th><?php echo $crs_credit; ?></th>
						</tr>
						<tr>
							<th class="text-center" scope="col">Course Time</th>
							<th><?php echo $crs_time; ?></th>
						</tr>
						<tr>
							<th class="text-center" scope="col">Course Details</th>
							<th><?php echo $crs_details; ?></th>
						</tr>
						<tr>
							<th class="text-center" scope="col">Action</th>
							<th><?php  if (isset($_SESSION['username'])) : ?>
								<a class="btn btn-warning" href="edit-course.php?crs_idx=<?php echo $crs_id; ?>">Edit</a>
								<a class="btn btn-danger" href="edit-course.php?std_idx=<?php echo $crs_id; ?>">Delete</a>
								<?php  endif; ?>
								
							<button type="button" class="btn btn-primary" name="reg_user" onclick="location.href='view-course.php'">Go Back</button>
							</th>
						</tr>
						
						<?php }	 ?>

					</tbody>
					<br>
				</table>
			</div>
		</div>
	</div>
</div>
<!--Student Table End-->


<?php include('footer.php') ?>
