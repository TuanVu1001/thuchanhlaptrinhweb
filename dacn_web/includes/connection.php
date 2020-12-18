
<?php

	$username  = "root";
	$password  = "";
	$localhost = "localhost";
	$database  = "dacn";


	$con = mysqli_connect($localhost, $username, $password, $database) or die ("Không thể kết nối đến database");
	mysqli_query($con,"SET NAMES 'UTF8'");
 ?>