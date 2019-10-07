<?php 
	
	include('server.php');
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php include 'menu.php' ?>
<div class="login-sec">
    <div class="container">
        <div class="row">
            <div class="header">
                <h2>Admin Login</h2>
            </div>

            <form method="post" action="login.php">

                <?php include('errors.php'); ?>

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn btn-success" name="login_user">Login</button>
                </div>

            </form>


        </div>
    </div>
</div>

<?php include 'footer.php' ?>