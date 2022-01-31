	  <?php
include('Config.php');
if(isset($_GET["Action"]))
	{
		if($_GET["Action"] == "Save")
	//*** Insert Reply ***//
	$strSQL = "INSERT INTO reply2 ";
	$strSQL .="(QuestionID,CreateDate,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery_MEM = mysqli_query($dbcon,$strSQL);
	
	//*** Update Reply ***//
	$strSQL = "UPDATE webboard2 ";
	$strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
	$objQuery_MEM = mysqli_query($dbcon,$strSQL);	
	header("location:thread.php");
}
?>