<?php 
	include("server.php");

	echo $std_id = $_GET['del_std'];
    echo $query = "DELETE FROM `student` WHERE std_id = '$std_id'";
	
	if(mysqli_query($db,$query))
	{
		echo "<script>window.open('view-student.php?deleted = A menu has been deleted successfully...!!!','_self')</script>";
	}
?>