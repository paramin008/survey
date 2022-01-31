<!DOCTYPE html>
<html lang="en">
<?php 
	include ('Config.php');
	
	?>
<head>
    <link rel="shortcut icon" type="image/png" href="images/u.gif" />
    <title>กระทู้</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>

</head>
<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-wrap">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <p class="mb-0 phone pl-md-2">
                                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 035-434164</a>
                                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> sci@rmutsb.ac.th</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <div class="social-media">
                                    <p class="mb-0 d-flex">
                                        <a href="https://www.facebook.com/scisuphanburi/?epa=SEARCH_BOX" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="images/c.png" width="290" height="53" alt="" /><a class="navbar-brand" href="index.html"></a><strong>
                <br>
            </strong>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item active"><a href="Thread.php" class="nav-link">Webboard</a></li>
                    <li class="nav-item"><a href="admin/login.php" class="nav-link">Admin login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url(images/3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">

                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(images/2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">

                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(images/1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="m-0 font-weight-bold text-primary">
      
    </span>
    <div class="agile-grids">	
				<!-- tables -->
	  <div class="agile-tables">
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
	header("location:viewthread.php?QuestionID");
}
?>
				  </table><?php
//*** Select Question ***//
$strSQL = "SELECT * FROM webboard2  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery_MEM = mysqli_query($dbcon,$strSQL) or die ("Error Query [".$strSQL."]");
$objResult_MEM = mysqli_fetch_array($objQuery_MEM);

//*** Update View ***//
$strSQL = "UPDATE webboard2 ";
$strSQL .="SET View = View + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery_MEM = mysqli_query($dbcon,$strSQL)	
	
?>
	
<table width="738" border="1" cellpadding="1"  align="center"class="table table-bordered" cellspacing="1">
  <tr>
    <td colspan="2"><center><h3><div class='text-dark'><?php echo $objResult_MEM["Question"];?></h3></center></td></div>
  </tr>
  <tr>
    <td height="53" colspan="2"><div class='text-dark'><?php echo nl2br($objResult_MEM["Details"]);?> </td></div>
  </tr>
  <tr class='text-dark'>
    <td width="397">ชื่อ : <?php echo $objResult_MEM["Name"];?> เวลาตั้งกระทู้ : <?php echo $objResult_MEM["CreateDate"];?></td>
    <td width="253">คนดู : <?php echo $objResult_MEM["View"];?> การตอบกลับ : <?php echo $objResult_MEM["Reply"];?></td>
  </tr>
</table>
<br>
<br>
<?php
$intRows = 0;
$strSQL2 = "SELECT * FROM reply2  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery2 = mysqli_query($dbcon,$strSQL2) or die ("Error Query [".$strSQL."]");
while($objResult2 = mysqli_fetch_array($objQuery2))
{
	$intRows++;
?> <div class='text-dark'>No : <?php echo $intRows;?></div>
<table width="86%" border="1" cellpadding="1"  align="center"class="table table-bordered" cellspacing="1">
  <tr class='text-dark'>
    <td height="53" colspan="2"><?php echo  ($objResult2["Details"]);?></td>
  </tr>
  <tr class='text-dark'>
    <td width="692">ชื่อ :
        <?php echo $objResult2["Name"];?>      </td>
    <td width="300">เวลาที่ตอบกระทู้ :
    <?php echo $objResult2["CreateDate"];?></td>
  </tr>
</table><br>
<?php
}
?>
<br>
 <br>
<br>
<form action="viewthread.php?QuestionID=<?php echo $_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="87%" border="1" cellpadding="1" class="table table-bordered" cellspacing="1">
    <tr class='text-dark'>
      <td width="78">รายละเอียด</td>
      <td><textarea name="txtDetails"   class="form-control" cols="10" rows="2" id="txtDetails"></textarea></td>
    </tr>
    <tr class='text-dark'>
      <td width="78">ชื่อ</td>
      <td width="347"><input name="txtName" type="text" id="txtName"  value="" size="10"></td>
    </tr>
  </table>
  
  <center><input name="btnSave"  class="btn btn-primary" type="submit" id="btnSave" value="ยืนยัน"></center>
</form>
</body>
</html>
<?php
	mysqli_close($dbcon);
?> </h5>
	  </div>
      
    <!-- /.row -->
</h2>
     
    </div></p>
    <footer class="footer">




        <div align="center">
            <br><br>
            <h2 class="footer-heading">Copyright © 2020 Faculty of Science and Technology – Rajamangala University of Technology Suvarnabhumi.</h2>

      </div>
        </div>

        </div>
        </div>
        </div>
</footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>
</html>