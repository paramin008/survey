<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include("Config.php");
	$QuestionID = null;
	 if(isset($_GET["QuestionID"]))
   {
	   $QuestionID = $_GET["QuestionID"];
   }
	$sql = "DELETE  FROM webboard2 WHERE QuestionID = '".$QuestionID."' ";     

	$query = mysqli_query($dbcon,$sql);

	if($query) {
		echo "<script type='text/javascript'>";
	echo "alert('Succesfuly');";
	echo "window.location = 'managethread.php'; ";
	echo "</script>";
	}
	mysqli_close($dbcon);
?>
</body>
</html>