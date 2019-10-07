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
                    <h2>Course</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">View Course</li>
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
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group" style="margin:50px auto;margin-left:40%;">
                        <input class="form-control" style="float:left;width:20%;" type="test" name="searcbox" placeholder="Search Here..">
                        <input class="btn btn-success" style="float:left" type="submit" name="searc" value="Search">
                    </div>
                </form>
                <table class="table table-sm text-center" style="border: 2px solid #333; margin-top:50px;">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Course ID</th>
                            <th class="text-left" scope="col">Course Name</th>
                            <th class="text-center" scope="col">Course Code</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
							if(isset($_POST['searc']))
							{
								$sr=$_POST['searcbox'];
							$query = "select *from course where crs_id like'%$sr%' or crs_name like'%$sr%'";
							
							$run = mysqli_query($con,$query);

							while($row=mysqli_fetch_array($run))
							{		
								$crs_id = $row[0];							
								$crs_name = $row[1];
								$crs_code = $row[2];
							?>

                            <td>
                                <?php echo $crs_id; ?>
                            </td>
                            <td class="text-left">
                                <?php echo $crs_name; ?>
                            </td>
                            <td>
                                <?php echo $crs_code; ?>
                            </td>

                            <td>
                                <a class="btn btn-success" href="single_course.php?crs_idx=<?php echo $crs_id; ?>">Details</a>
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <a class="btn btn-warning" href="edit-course.php?crs_idx=<?php echo $crs_id; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete_course.php?del_crs=<?php echo $crs_id; ?>">Delete</a>
                                <?php  endif; ?>
                            </td>
                        </tr>
                        <?php 
							}} 
							else
							{
							$query = "select *from course";
							$run = mysqli_query($con,$query);

							while($row=mysqli_fetch_array($run))
							{		
								$crs_id = $row[0];							
								$crs_name = $row[1];
								$crs_code = $row[2];
							?>
                        <tr>
                            <td>
                                <?php echo $crs_id; ?>
                            </td>
                            <td class="text-left">
                                <?php echo $crs_name; ?>
                            </td>
                            <td>
                                <?php echo $crs_code; ?>
                            </td>

                            <td>
                                <a class="btn btn-success" href="single_course.php?crs_idx=<?php echo $crs_id; ?>">Details</a>
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <a class="btn btn-warning" href="edit-course.php?crs_idx=<?php echo $crs_id; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete_course.php?del_crs=<?php echo $crs_id; ?>">Delete</a>
                                <?php  endif; ?>
                            </td>
                        </tr>
                        <?php 
							}	
							} ?>


                    </tbody>
                    <br>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Student Table End-->


<?php include('footer.php') ?>