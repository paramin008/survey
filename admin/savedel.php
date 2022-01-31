
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include('Config.php');
	$id_question = null;
	 if(isset($_GET["id_question"]))
   {
	   $id_question = $_GET["id_question"];
   }
	$sql = "DELETE  FROM tb_question WHERE id_question = '".$id_question."' ";     

	$query = mysqli_query($dbcon,$sql);

	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('Succesfuly');";
	echo "window.location = 'delq.php'; ";
	echo "</script>";
	}
	mysqli_close($dbcon);
?>



