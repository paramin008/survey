<?php

	include('Config.php'); 
if(isset($_GET["Action"]))
	{
	
		if($_GET["Action"] == "Save")
			
	//*** Insert Question ***//
	$strSQL = "INSERT INTO webboard2 ";
	$strSQL .="(CreateDate,Question,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery_MEM = mysqli_query($dbcon,$strSQL);

header("location:Thread.php");
}
?>		