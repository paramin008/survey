<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" type="image/png"  href="images/u.gif"/>
    <title>ระบบประเมินผลการตัดสินใจเข้าศึกษาต่อ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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

<body id="page-top">


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
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark  ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<img src="images/c.png" width="290" height="53" alt=""/><a class="navbar-brand" href="index.html"></a><strong><br>
	    	</strong>

	      <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span  class="fa fa-bars"></span> Menu
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
		</div><div align="center"><h3><u>กระทู้สนทนา</u></h3></div>
  </div><h6 ><a href="newthread.php"><div class='text-primary'>ตั้งกระทู้ใหม่</div></a></h6>
   			  <?php
include 'Config.php';

$sql = "SELECT * FROM webboard2 ";
$querl = mysqli_query($dbcon, $sql);
$result = mysqli_fetch_array($querl);
$num_row = mysqli_num_rows($querl);

$per_page = 10; // Per Page

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$Prev_Page = $page - 1;
$Next_Page = $page + 1;

$page_Start = (($per_page * $page) - $per_page);
if ($num_row <= $per_page) {
    $Num_Pages = 1;
} else if (($num_row % $per_page) == 0) {
    $Num_Pages = ($num_row / $per_page);
} else {
    $Num_Pages = ($num_row / $per_page) + 1;
    $Num_Pages = (int) $Num_Pages;
}

$sql .= " order  by QuestionID DESC LIMIT $page_Start , $per_page";
$querl = mysqli_query($dbcon, $sql);
?>

  <table class="table">
    <tbody>
      <tr class='text-dark'>
        <td>#</td>
        <td >หัวข้อ</td>
        <td>ผู้ลง</td>
        <td>เวลา</td>
        <td>คนดู</td>
        <td>คนตอบ</td>
      </tr>
		 <?php
while ($result = mysqli_fetch_array($querl)) {
    ?>
  <tr>
    <td class='text-dark'><p><?php echo $result["QuestionID"]; ?></p></td>

    <td><a class='text-primary' href="viewthread.php?QuestionID=<?php echo $result["QuestionID"]; ?>">

	<?php echo $result["Question"]; ?></a></td>

    <td class='text-dark'><?php echo $result["Name"]; ?></td>

    <td class='text-dark'><?php echo $result["CreateDate"]; ?></td>

    <td class='text-dark'><?php echo $result["View"]; ?></td>

    <td class='text-dark'><?php echo $result["Reply"]; ?></td>

  </tr>
<?php
}
?>
    </tbody>
  </table>
  <p>&nbsp;</p>

    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
    <footer class="footer">



							<div align="center" ><br><br>
								<h2 class="footer-heading">Copyright © 2020 Paramin.</h2>

							</div>
						</div>

					</div>
				</div>
			</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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