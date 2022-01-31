<?php session_start(); ?>
<html>
<head>
<title></title>
</head>
<body>
<?php
	include('Config.php');
	ini_set('display_errors', 1);
	error_reporting(~0);

	
 
	
	$ReplyID = null;
	 if(isset($_GET["ReplyID"]))
   {
	   $ReplyID = $_GET["ReplyID"];
   }
	$sql = "DELETE  FROM reply2 WHERE ReplyID = '".$ReplyID."' ";     

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


