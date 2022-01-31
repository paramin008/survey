<?php
session_start();
include('Config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
?>

<?php
include('Config.php');  
$sql = "DELETE FROM tb_answer";
$result = mysqli_query($dbcon, $sql) or die ("Error in query: $sql " . mysqli_error());
?>

<?php
include('Config.php');  
$sql = "DELETE FROM tb_detil";
$result = mysqli_query($dbcon, $sql) or die ("Error in query: $sql " . mysqli_error());
?>

<?php
include('Config.php');   
$sql = "DELETE FROM tb_person";
$result = mysqli_query($dbcon, $sql) or die ("Error in query: $sql " . mysqli_error());
?>
 <META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>
 
 <?php } ?>