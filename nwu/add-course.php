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

?>
<?php include("menu.php")?>

<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Course</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Add Course</li>
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
                    <div class="panel-body">
                        <div class="header" style="width:100%; margin-bottom:25px">
                            <h2>Add Course</h2>
                        </div>

                        <form method="post">

                            <?php include('errors.php'); ?>

                            <div class="form-group">
                                <label>Course ID</label>
                                <input class="form-control" type="text" name="crs_id" id="crs_id">
                            </div>
                            <div class="form-group">
                                <label>Course Name</label>
                                <input class="form-control" type="text" name="crs_name" id="crs_name">
                            </div>
                            <div class="form-group">
                                <label>Course Code</label>
                                <input class="form-control" type="text" name="crs_code" id="crs_code">
                            </div>
                            <div class="form-group">
                                <label>Course Credit</label>
                                <input class="form-control" type="text" name="crs_credit" id="crs_credit">
                            </div>
                            <div class="form-group">
                                <label>Course Time</label>
                                <input class="form-control" type="text" name="crs_time" id="crs_time">
                            </div>
                            <div class="form-group">
                                <label>Course Details</label>
                                <textarea class="form-control" aria-required="true" rows="8" cols="45" name="crs_details"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="add_crs">Add Course</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>