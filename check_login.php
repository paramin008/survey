<?php
	session_start();
	include('Config.php');

	$strSQL = "SELECT * FROM tb_admin WHERE username = '".mysqli_real_escape_string($dbcon,$_POST['username'])."' 
	and password = '".mysqli_real_escape_string($dbcon,$_POST['password'])."'";
	$objQuery = mysqli_query($dbcon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $objResult["id"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "ADMIN")
			{
				header("location:index.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysqli_close($dbcon);
?>