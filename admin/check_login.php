<?php
	session_start();
	include('Config.php');

	$strSQL = "SELECT * FROM tb_admin WHERE username = '".mysqli_real_escape_string($dbcon,$_POST['username'])."' 
	and password = '".mysqli_real_escape_string($dbcon,$_POST['password'])."'";
	$objQuery = mysqli_query($dbcon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "โปรตรวจชื่อผู้ใช้และรหัสผ่านอีกครั้ง"; 
		echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=login.php'>";
	}
	else
	{
			$_SESSION["lname"] = $objResult["lname"];
			$_SESSION["fname"] = $objResult["fname"];
			$_SESSION["id"] = $objResult["id"];
			$_SESSION["status"] = $objResult["status"];
            $_SESSION['alogin']=$_POST['username'];
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