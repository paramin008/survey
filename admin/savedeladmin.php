<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include('Config.php');
	$id = null;
	 if(isset($_GET["id"]))
   {
	   $id = $_GET["id"];
   }
	$sql = "DELETE  FROM tb_admin WHERE id = '".$id."' ";     

	$query = mysqli_query($dbcon,$sql);

	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('ลบเรียบร้อยแล้ว');";
	echo "window.location = 'addadmin.php'; ";
	echo "</script>";
	}
	mysqli_close($dbcon);
?>
</body>
</html>