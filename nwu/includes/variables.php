<?php
	//database configuration
	$host ="localhost";
	$user ="root";
	$pass ="";
	$database = "nwu";
	$connect = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());
	

	//copyright
	$copyright = "";
?>