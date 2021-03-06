<?php
 session_start();

 $conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");
 
if(isset($_POST['submit'])) { 
  
    
	$userid=$_POST['userid'];
	$username=$_POST['username'];
    $crew=$_POST['crew'];
    $contactno=$_POST['contactno'];
	$boardingpoint=$_POST['boardingpoint'];  
   	$boardingtime=$_POST['boardingtime']; 
	$shift=$_POST['shift'];
	$vehicletype=$_POST['vehicletype'];
	$routeid=$_POST['routeid'];
	 
	
	$query="INSERT INTO users(userid,username,crew,contactno,boardingpoint,boardingtime,shift,vehicletype,routeid)
	VALUES('$userid','$username','$crew','$contactno','$boardingpoint','$boardingtime','$shift','$vehicletype','$routeid')";
		  
	if (mysqli_query($conn,$query)) {
    echo "New record created successfully";
	header("location : addemployee.php");
    }       
    
  }
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

  <!--Registration Form CSS -->
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<style>
input[type=text], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
   border: 2px solid blue;
  border-radius: 4px;
  background: #f1f1f1;
}
</style>
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
            <a href="staff.php">Back</a>
          </li>
        </ol>
<form action="addemployee.php" method="post">
  <div class="container">
    <h3>Add New Employee</h3>
   
    <hr>
    
    <label for="userid"><b>user ID</b></label>
    <input type="number" placeholder="Enter userid" name="userid" required>
	<br>
    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
    <br>
	<label for="crew"><b>Crew</b></label>
    <input type="text" placeholder="Enter Crew" name="crew" required>
    <br>
    <label for="contactno"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter User Mobile No" name="contactno" required>
	<br>
	<label for="boardingpoint"><b>Boarding Point</b></label>
    <input type="text" placeholder="Enter Boardingpoint" name="boardingpoint" required>
	<br>
	<label for="boardingtime"><b>Boarding Time</b></label>
    <input type="time"  name="boardingtime" required>
	<br>
	<label for="shift"><b>Shift</b></label>
    <input type="text" placeholder="Enter Shift" name="shift" required>
	<br>
	<label for="vehicletype"><b>Vehicle Type</b></label>
    <input type="text" placeholder="Enter A for Van and B for Bus" name="vehicletype" required>
	<br>
	<label for="routeid"><b>Route ID</b></label>
    <input type="number" placeholder="Enter Route ID" name="routeid" required>
         	
    <hr>

    
    <button type="submit" name="submit">Submit</button>
  </div>
  

</form>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  
  <!-- print script -->
  <script src="js/tableprint.js"></script>
    
  <!-- table to excel sheets -->
  <script src="js/tableexcel.js"></script>
  
  
  
 



</body>

</html>
