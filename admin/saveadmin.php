<?php
include('Config.php');  
	$username = $_POST["username"];
	$password = $_POST["password"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$status = $_POST["status"];
	
	
	
	$sql = "INSERT INTO tb_admin (username, password, fname, lname, status)
			 VALUES('$username', '$password', '$fname','$lname','$status')";
	$query = mysqli_query($dbcon,$sql);
	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('คุณได้เพิ่มข้อมูลเรียบร้อย');";
	echo "window.location = 'addadmin.php'; ";
	echo "</script>";
	}

	
?>