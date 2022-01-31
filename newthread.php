<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/png" href="images/u.gif" />
    <title>ตั้งกระทู้ใหม่</title>
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
                                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> tell</a>
                                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> email</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <div class="social-media">
                                    <p class="mb-0 d-flex">
                                        <a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>

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
        <div align="center"><h3><u>ตั้งกระทู้</u></h3></div>
    </span>
    <div class="agile-grids">
				<!-- tables -->
	  <div class="agile-tables">

				  </table>


                  <?php

include 'Config.php';
if (isset($_GET["Action"])) {

    if ($_GET["Action"] == "Save")

//*** Insert Question ***//
    {
        $strSQL = "INSERT INTO webboard2 ";
    }

    $strSQL .= "(CreateDate,Question,Details,Name) ";
    $strSQL .= "VALUES ";
    $strSQL .= "('" . date("Y-m-d H:i:s") . "','" . $_POST["txtQuestion"] . "','" . $_POST["txtDetails"] . "','" . $_POST["txtName"] . "') ";
    $objQuery_MEM = mysqli_query($dbcon, $strSQL);

    if ($objQuery_MEM) {

        echo "<script>window.open('thread.php','_self')</script>";

    }
}
?>


      <form action="newthread.php?Action=Save" method="post" name="frmMain" enctype="multipart/form-data" id="frmMain">
  <table width="100%" border="1"  class="table table-bordered" cellpadding="1" cellspacing="1">
    <tr class='text-dark'>
      <td>หัวข้อ</td>
      <td><input name="txtQuestion" type="text"  class="form-control" id="txtQuestion"></td>
    </tr>
    <tr class='text-dark'>
      <td width="78">รายละเอียด</td>
     <td><textarea name="txtDetails" class="form-control" rows="5" id="txtDetails"></textarea></td>
    </tr>

    <tr class='text-dark'>
      <td width="78">ชื่อ</td>
      <td width="647"><input name="txtName" type="text"  class="form-control" id="txtName" value="" size="30"></td>
    </tr>
	  <tr></tr>




  </table>

  <center><input name="btnSave"  class="btn btn-primary" type="submit" id="btnSave" value="ยืนยัน"></center>
</form>&nbsp;</h5>
	  </div>

    <!-- /.row -->
</h2>

    </div></p>







    <footer class="footer">




        <div align="center">
            <br><br>
            <h2 class="footer-heading">Copyright © 2020 Paramin.</h2>

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