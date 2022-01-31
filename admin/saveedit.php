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

	$sql = "UPDATE tb_question SET  
			
			question = '".$_POST["question"]."'
			
	WHERE id_question = '".$_POST["id_question"]."' ";

	$query = mysqli_query($dbcon,$sql);
	
	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('คุณได้แก้ไขข้อมูล');";
	echo "window.location = 'delq.php'; ";
	echo "</script>";
	}

	mysqli_close($dbcon);
?>
</body>
</html>