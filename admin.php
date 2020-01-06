<?php
 session_start();
   if(!isset($_SESSION['username'])|| $_SESSION['role']!="admin"){
	   header("location:login1.php");
   }
include_once('connection.php');
$query = "SELECT * FROM commontable";
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

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    
    <a class="navbar-brand mr-1" href="admin.php">Welcome <?= $_SESSION['username'] ?></a>

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
        <a class="nav-link" href="admin.php">
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
        <a class="nav-link" href="tables.html">
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
            <a href="admin.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
		  <li class="breadcrumb-item active"><?php
			echo  date("Y/m/d");
			echo  date(" l");
		  ?></li>
        </ol>
        
		
	
		
        <!-- Icon Cards-->
        <div class="row">
		
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-bus"></i>
                </div>
                <div class="mr-5">Vehicle Type<br>2
				
				</div>
              </div>
              <a href="vehicle.php" class="card-footer text-white clearfix small z-1" >
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-user"></i>
                </div>
                <div class="mr-5">Total Rides<br>
				<?php
                $con=mysqli_connect("localhost","root","","login");
            
                $sql="SELECT routeid FROM commontable ORDER BY routeid";

                if ($res=mysqli_query($con,$sql))
                 {
                   // Return the number of rows in result set
                        $rowcount=mysqli_num_rows($res);
                         // Free result set
					    echo $rowcount;

                        mysqli_free_result($res);
                  }

                    mysqli_close($con);
                  ?>
				</div>
              </div>
              <a href="admin.php" class="card-footer text-white clearfix small z-1" >
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-id-card"></i>
                </div>
                <div class="mr-5">Total Drivers<br>
				<?php
                $con1=mysqli_connect("localhost","root","","login");
            
                $sql1="SELECT driverid FROM driver ORDER BY driverid";

                if ($res1=mysqli_query($con1,$sql1))
                 {
                   // Return the number of rows in result set
                        $rowcount=mysqli_num_rows($res1);
                         // Free result set
					    echo $rowcount;

                        mysqli_free_result($res1);
                  }

                    mysqli_close($con1);
                  ?>
				</div>
              </div>
              <a href="driver.php" class="card-footer text-white clearfix small z-1" >
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-check"></i>
                </div>
                <div class="mr-5">Running Rides<br>45</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
		<hr>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>RouteID</th>
                    <th>Starting Point</th>
                    <th>Destination Point</th>
                    <th>Driver Id</th>
                    <th>Bus ID</th>
                    <th>Bus NO</th>
					
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>RouteID</th>
                    <th>Starting Point</th>
                    <th>Destination Point</th>
                    <th>Driver Id</th>
                    <th>Bus ID</th>
                    <th>Bus NO</th>
                  </tr>
                </tfoot>
                <tbody>
				<!-- populate table from mysql database -->
               <?php while($row = mysql_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row['routeid'];?></td>
                    <td><?php echo $row['pickuppoint'];?></td>
                    <td><?php echo $row['destinationpoint'];?></td>
		    <td><?php echo $row['destinationpoint'];?></td>
                    <td><?php echo $row['driverid'];?></td>
		    <td><?php echo $row['busid'];?></td>
		    <td><?php echo $row['busno'];?></td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at <?php echo date("F d Y H:i:s.", filemtime("vehicle.php"));
?></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © 2010-<?php echo date("Y");?></span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
