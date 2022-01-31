<?php
session_start();
include('Config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/2.ico" />
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>แก้ไขผู้ดูแล</title>

  <!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style type="text/css">
  body {
   font-family: 'Kanit', sans-serif;
}
  </style>
</head>

<body id="page-top">

<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0"><?=$_SESSION['fname']; ?> <?=$_SESSION['lname']; ?>
          
        </div>
        <div class="sidebar-brand-text mx-3"> <sup></sup></div>
      </a>
 
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าหลัก</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      
      <!-- Divider -->
      

      <!-- Heading -->
      <div class="sidebar-heading">
       
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>หน้า</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="tables.php">ตารางสรุปเพศ</a>
            <a class="collapse-item" href="ed.php">ตารางสรุประดับการศึกษา</a>
			  <a class="collapse-item" href="address.php">ตารางสรุปที่อยู่สถานศึกษา</a>
            <a class="collapse-item" href="ooj.php">ตารางสรุปปัจจัย</a>
			  
      
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
		  
		  <a class="nav-link" href="JavaScript:if(confirm('ยืนยันที่จะลบ')==true){window.location='del.php';}">
       
          <i class="fas fa-fw fa-eraser"></i>
          <span>ลบข้อมูลประเมินผลทั้งหมด</span></a>
      </li>
		
		<li class="nav-item">
		  <a class="nav-link" href="delq.php">
         <i class="fas fa-remove-format"></i>
          <span>จัดการ</span></a>
      </li>
		<li class="nav-item">
		  <a class="nav-link" href="managethread.php">
         <i class="far fa-newspaper"></i>
          <span>จัดการกระทู้สนทนา</span></a>
      </li>
		<li class="nav-item">
		  <a class="nav-link" href="addadmin.php">
         <i class="fas fa-user-plus"></i>
          <span>จัดการผู้ดูแล</span></a>
      </li>
		
      <!-- Nav Item - Tables -->
  <?php
	
	include('Config.php');
	$id = $_REQUEST['id'];
	$strSQL_MEM = "SELECT * FROM tb_admin WHERE id = '$id' ";
$objQuery_MEM = mysqli_query($dbcon,$strSQL_MEM);
$objResult_MEM = mysqli_fetch_array($objQuery_MEM,MYSQLI_ASSOC);
	
?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    <span class="font-weight-bold"></span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                 
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate"></div>
                    <div class="small text-gray-500"></div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate"></div>
                    <div class="small text-gray-500"></div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate"></div>
                    <div class="small text-gray-500"></div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate"></div>
                    <div class="small text-gray-500"></div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow"> <a href="logout.php">ออกจากระบบ</a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                 
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                 
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">
          <!-- DataTales Example -->          </h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">เพิ่มผู้ดูแล</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
<form action="saveeditadmin.php" name="frmAdd" method="post">
<table width="488" height="269" border="0" align="center">
  <td width="234"><tbody>
    <tr>
      <td><form>  
    
   <div class="form-group row">
  <label for="example-text-input" class="col-9 col-form-label">ID</label>
  <div class="col-10">
    <input class="form-control" type="text" readonly name="id" value="<?php echo $objResult_MEM["id"];?>" id="id">
  </div>
</div>
		  <div class="form-group row">
  <label for="example-text-input" class="col-9 col-form-label">Username</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="username" value="<?php echo $objResult_MEM["username"];?>" id="username">
  </div>
</div>
		  <div class="form-group row">
 <label for="example-password-input" class="col-9 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password"  value="<?php echo $objResult_MEM["password"];?>" name="password" id="password">
  </div>
		  </div>
<div class="form-group row">
  <label for="example-email-input" class="col-9 col-form-label">ชื่อ</label>
  <div class="col-10">
    <input class="form-control" type="text" value="<?php echo $objResult_MEM["fname"];?>" name="fname"  id="fname">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-9 col-form-label">นามสกุล</label>
  <div class="col-10">
    <input  class="form-control" type="text"  name="lname" id="lname" value="<?php echo $objResult_MEM["lname"];?>">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-9 col-form-label">สถานะ</label>
  <div class="col-10">
    <input class="form-control" name="status" readonly type="text" value="ADMIN" id="status">
  </div>
</div>
<div class="form-group row">
 
 <div class="form-group col-md-12">
    
	  <button type="submit" class="btn btn-primary">ยืนยัน</button>
		  </div>
       
    
  </td>
    </tr>
  </tbody>
</table>
</body>
	
</html>



  
</form></div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
       <footer align="center" class="sticky-footer bg-white">
        <div align="center" class="container my-auto">
          <div align="center" class="copyright text-center my-auto"> <span> ᴄᴏᴘʏʀɪɢʜᴛ © ᴘᴀʀᴀᴍɪɴ 2020 </span></div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal"></button>
          <a class="btn btn-primary" href="login.html"></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
<?php } ?>