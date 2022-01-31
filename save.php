<?php
	include('Config.php'); 
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
// INSERT TABLE tb_roomreserv	

	$strSQL = "INSERT INTO tb_person(created,gender,education) VALUES (
	'".date("d-m-Y H:i:s")."',
	'".$_POST["rdo_gender"]."',
	'".$_POST["rdo_education"]."')";
	$objQuery = mysqli_query($dbcon,$strSQL);
	if($objQuery)
	{

		//SELECT id_person

		$strSQL3 = "SELECT id_person FROM tb_person ORDER BY id_person  DESC LIMIT 1"; 
		$objQuery3 = mysqli_query($dbcon, $strSQL3);
		$objResult3 = mysqli_fetch_array($objQuery3);
		if(!$objResult3)
		{
			$id_person  = 1;
		}
		else
		{
			$id_person  = $objResult3["id_person"];

	}
	}
	else
	{
	echo "Error Save tb_person 	 [".$strSQL."]";
	}

	for($i=0;$i<count($_POST["chkEmail"]);$i++)
	{
		if($_POST["chkEmail"][$i] != "")
		{
			$strSQL = "INSERT INTO tb_answer (score,id_question,id_person) VALUES ('".$_POST["chkEmail"][$i]."','". $i ."','".$id_person."')";
			$objQuery = mysqli_query($dbcon,$strSQL) or die ("Error Query [".$strSQL."]");			
		}
	}

	echo "<script type='text/javascript'>";
	echo "alert('ขอบคุณที่ตอบแบบสอบถามระบบได้ทำการบันทึกข้อมูลเรียบร้อยแล้ว');";
	echo "window.location = 'index.php'; ";
	echo "</script>";

	

    $school = $_POST["school"];
	$province = $_POST["province_name"];
	$amphur = $_POST["amphur_name"];
	$district = $_POST["district_name"];
	$zipcode = $_POST["zipcode_name"];
	
	
	$sql = "INSERT INTO tb_detil(school, province, amphur,district,zipcode)
			 VALUES('$school', '$province', '$amphur', '$district', '$zipcode')";
 
	$result = mysqli_query($dbcon, $sql) or die ("Error in query: $sql " . mysqli_error());

	
	

	mysqli_close($dbcon);
	





?>
    
