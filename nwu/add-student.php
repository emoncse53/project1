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
                    <h2>Student</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Add Student</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->

<div class="login-sec">
    <div class="container">
        <div class="row">
            <div class="header">
                <h2>Register</h2>
            </div>

            <form method="post" action="add-student.php">

                <?php include('errors.php'); ?>

                <div class="input-group">
                    <label>Student Id</label>
                    <input type="text" name="std_id" id="std_id">
                </div>
                <div class="input-group">
                    <label>Student Name</label>
                    <input type="text" name="std_name" id="std_name">
                </div>
                <div class="input-group">
                    <label>Father Name</label>
                    <input type="text" name="std_father_name" id="std_father_name">
                </div>
                <div class="input-group">
                    <label>Mother Name</label>
                    <input type="text" name="std_mother_name" id="std_mother_name">
                </div>
                <div class="input-group">
                    <label>Mobile Number</label>
                    <input type="text" name="std_number" id="std_number">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="std_email" id="std_email">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-success" name="reg_user">Register</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php include('footer.php') ?>