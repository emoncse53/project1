<?php 
	include("server.php");

	echo $crs_id = $_GET['del_crs'];
    echo $query = "DELETE FROM `course` WHERE crs_id = '$crs_id'";
	
	if(mysqli_query($db,$query))
	{
		echo "<script>window.open('view-course.php?deleted = A menu has been deleted successfully...!!!','_self')</script>";
	}
?>