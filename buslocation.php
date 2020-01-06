
<?php
include_once('connection.php');
$query = "SELECT routeid,pickuppoint,destinationpoint,driverid,busid,busno FROM commontable";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome <?= $_SESSION['username'] ?></title>
  <link href="img/icon.jpg" rel="icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <!--Maps-->
  <script type="text/javascript" src="js/maps.js"></script>

</head>
<style type="text/css">
		
		#map {
			width: 100%;
			height: 400px;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
 
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Welcome Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a href="profile.php" class="dropdown-item">Profile Settings</a>
          <a href="forgorpassword.php" class="dropdown-item" >Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="staff.php">
          <i class="fas fa-users"></i>
          <span>Employees</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="driver.php">
          <i class="fas fa-users"></i>
          <span>Drivers</span></a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Trip Details</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userlocation.php">
          <i <i class="fas fa-street-view"></i>
          <span>User Location</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buslocation.php">
          <i class="fas fa-map-marker"></i>
          <span>Bus Location</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-bus"></i>
          <span>Vehicle Types</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-list-ul"></i>
          <span>Reports</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-user-plus"></i>
          <span>Add Employee/Driver</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="far fa-bell"></i>
          <span>Notification</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Email</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        
        <!-- DataTables Example -->
        
          <div class="row">
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-search"></i>
                Search Bus Location</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>
          </div>
		  <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                View Bus Location</div>
              <div class="card-body">
               
		       <div id="map"></div>
			   
			   </div>
              <div class="card-footer small text-muted"></div>
            </div>
          </div>
        </div>
		      
        <script async defer
               src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpXro1ICwJd6g7HD79mW_Kq1wZeiwp3j0&callback=loadMap">
               </script> 


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  
  <!-- /#wrapper -->

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
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

</body>

</html>