<?php session_start(); ?>
<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include('Config.php');

	$sql = "UPDATE tb_admin SET  
	
			username = '".$_POST["username"]."',
			password = '".$_POST["password"]."',
			fname = '".$_POST["fname"]."',
			lname = '".$_POST["lname"]."',
			status = '".$_POST["status"]."'
			
	WHERE id = '".$_POST["id"]."' ";

	$query = mysqli_query($dbcon,$sql);
	
	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('คุณได้แก้ไขข้อมูล');";
	echo "window.location = 'addadmin.php'; ";
	echo "</script>";
	}

	mysqli_close($dbcon);
?>
</body>
</html>