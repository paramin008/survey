<?php
include ('Config.php');
	
$sql = "SELECT * FROM webboard2 ";
$querl = mysqli_query($dbcon,$sql);
$result = mysqli_fetch_array($querl);
$num_row = mysqli_num_rows($querl);

$Per_Page = 10;   // Per Page

	if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($num_row<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($num_row % $Per_Page)==0)
{
	$Num_Pages =($num_row/$Per_Page) ;
}
else
{
	$Num_Pages =($num_row/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$sql .=" order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
$querl  = mysqli_query($dbcon,$sql);
?>