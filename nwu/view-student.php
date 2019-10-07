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
                    <h2>Students</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">View Students</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<div class="search">

    <?php

	?>
</div>
<!--Student Table Start-->
<div class="view-student">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group" style="margin:50px auto;margin-left:40%;">
                        <input class="form-control" style="float:left;width:20%;" type="test" name="searchbox" placeholder="Search Here..">
                        <input class="btn btn-success" style="float:left" type="submit" name="search" value="Search">
                    </div>
                </form>
                <table class="table table-sm" style="border: 2px solid #333; margin-top:50px;">
                    <thead>
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Mother Name</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Email</th>
                            <th class="text-ceter" scope="col">
                                <?php  if (isset($_SESSION['username'])) : ?>Action
                                <?php  endif; ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
							if(isset($_POST['search']))
							{
								$src=$_POST['searchbox'];
							$query = "select *from student where std_id like'%$src%' or std_name like'%$src%'";
							$run = mysqli_query($con,$query);

							while($row=mysqli_fetch_array($run))
							{		
								$std_id = $row[0];							
								$std_name = $row[1];
								$std_father_name = $row[2];
								$std_mother_name = $row[3];
								$std_number = $row[4];
								$std_email = $row[5];
							?>

                            <td>
                                <?php echo $std_id; ?>
                            </td>
                            <td>
                                <?php echo $std_name; ?>
                            </td>
                            <td>
                                <?php echo $std_father_name; ?>
                            </td>
                            <td>
                                <?php echo $std_mother_name; ?>
                            </td>
                            <td>
                                <?php echo $std_number; ?>
                            </td>
                            <td>
                                <?php echo substr($std_email,0,200); ?>
                            </td>

                            <td>
                                <a class="btn btn-warning" href="edit-student.php?std_idx=<?php echo $std_id; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete_std.php?del_std=<?php echo $std_id; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 	
					}}
					else
					{
					$query = "select *from student";
							$run = mysqli_query($con,$query);

							while($row=mysqli_fetch_array($run))
							{		
								$std_id = $row[0];							
								$std_name = $row[1];
								$std_father_name = $row[2];
								$std_mother_name = $row[3];
								$std_number = $row[4];
								$std_email = $row[5];
							?>
                        <tr>
                            <td>
                                <?php echo $std_id; ?>
                            </td>
                            <td>
                                <?php echo $std_name; ?>
                            </td>
                            <td>
                                <?php echo $std_father_name; ?>
                            </td>
                            <td>
                                <?php echo $std_mother_name; ?>
                            </td>
                            <td>
                                <?php echo $std_number; ?>
                            </td>
                            <td>
                                <?php echo substr($std_email,0,200); ?>
                            </td>

                            <td>
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <a class="btn btn-warning" href="edit-student.php?std_idx=<?php echo $std_id; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete_std.php?del_std=<?php echo $std_id; ?>">Delete</a>
                                <?php  endif; ?>
                            </td>
                        </tr>
                        <?php 	
					}	
					}
				?>

                    </tbody>
                    <br>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Student Table End-->


<?php include('footer.php') ?>