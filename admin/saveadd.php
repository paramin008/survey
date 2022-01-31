<?php
include('Config.php');  
	$question = $_POST["question"];
	$sql = "INSERT INTO tb_question (question)
			 VALUES('$question')";
	$query = mysqli_query($dbcon,$sql);
	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('คุณได้เพิ่มข้อมูลเรียบร้อย');";
	echo "window.location = 'add.php'; ";
	echo "</script>";
	}	
?>