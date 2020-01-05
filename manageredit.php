<?php
   session_start();
   if(!isset($_SESSION['username'])|| $_SESSION['role']!="manager"){
	   header("location:login1.php");
   }
?>

<?php
 $conn = new mysqli("localhost","root","","login");
 
if(isset($_POST['submit'])) { 
  
    
	$managerid=$_POST['managerid'];
	$sql="SELECT * FROM schedule where managerid='".$managerid."'";
    $result = mysqli_query($conn,$sql) or die ( mysqli_error());

}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome <?= $_SESSION['username'] ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="img/icon.jpg" rel="icon">
  <link href="img/apple-touch-icon.jpg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files Icons CSS***-->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!--Registration Form CSS -->
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container">
      <!--header logo-->
      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="img/logo.jpg" alt="" class="img-fluid"></a>
      </div>
      <!--Navigation bar-->
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="manager.php">Home</a></li>
          <li><a href="#contact">Schedule Upload</a></li>
		   <li class="drop-down"><a href="">People</a>
                <ul>
                  <li><a href="addpeople.php">Add Employee</a></li>
                  <li><a href="deletepeople.php">Delete Employee</a></li>
				  </ul>
           </li>
		  <li><a href = "logout.php">Sign Out</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->

  <main id="main">

    <!--==========================
      Contact Section
    ============================-->
	<br>
	<br>
	<br>
    <section id="contact">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="manager.php">Back</a>
          </li>
        </ol>

        <div class="row wow fadeInUp">

         

          <div class="col-lg-12">
            
            <div class="form">
             
            
				 <div class="card-body">
            <div class="table-responsive" id="tab">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
				    <th>EDIT</th>
                    <th>Chorus ID</th>
                    <th>Employee Name</th>
					<th>managerid</th>
                    <th>Gender</th>
                    <th>Mobile Number1</th>
                    <th>Pick Up Location</th>
                    <th>Pickup Schedule</th>
					<th>PickupTime ShiftA</th>
                    <th>PickupTime ShiftB</th>
                    <th>PickupTime ShiftC</th>
                    <th>PickupTime ShiftG</th>
					<th>Route Number</th>
					 <th>Month</th>
					<th>Crew</th>
					 <th>day1</th>
					 <th>day2</th>
					 <th>day3</th>
					 <th>day4</th>
					 <th>day5</th>
					 <th>day6</th>
					 <th>day7</th>
					 <th>day8</th>
					 <th>day9</th>
					 <th>day10</th>
					 <th>day11</th>
					 <th>day12</th>
					 <th>day13</th>
					 <th>day14</th>
					 <th>day15</th>
					 <th>day16</th>
					 <th>day17</th>
					 <th>day18</th>
					 <th>day19</th>
					 <th>day20</th>
					 <th>day21</th>
					 <th>day22</th>
					 <th>day23</th>
					 <th>day24</th>
					 <th>day25</th>
					 <th>day26</th>
					 <th>day27</th>
					 <th>day28</th>
					 <th>day29</th>
					 <th>day30</th>
					 <th>day31</th>
					<th>Item Type</th>
					<th>Path</th>
					
                </thead>
                
                <tbody>
				 <?php while($row = mysqli_fetch_assoc($result)){
			   ?>
                <tr>
				    <td><a href="update.php?ChorusID=<?php echo $row["ChorusID"]; ?>">Edit</a></td>
                    <td><?php echo $row['ChorusID'];?></td>
                    <td><?php echo $row['EmployeeName'];?></td>
					<td><?php echo $row['managerid'];?></td>
                    <td><?php echo $row['Gender'];?></td>
					<td><?php echo $row['MobileNumber1'];?></td>
					<td><?php echo $row['PickUpLocation'];?></td>
					<td><?php echo $row['PickupSchedule'];?></td>
                    <td><?php echo $row['PickupTimeShiftA'];?></td>
                    <td><?php echo $row['PickupTimeShiftB'];?></td>
                    <td><?php echo $row['PickupTimeShiftC'];?></td>
					<td><?php echo $row['PickupTimeShiftG'];?></td>
                    <td><?php echo $row['RouteNumber'];?></td>
					<td><?php echo $row['managerid'];?></td>
                    <td><?php echo $row['day1'];?></td>
					<td><?php echo $row['day2'];?></td>
					<td><?php echo $row['day3'];?></td>
					<td><?php echo $row['day4'];?></td>
					<td><?php echo $row['day5'];?></td>
					<td><?php echo $row['day6'];?></td>
					<td><?php echo $row['day7'];?></td>
					<td><?php echo $row['day8'];?></td>
					<td><?php echo $row['day9'];?></td>
					<td><?php echo $row['day10'];?></td>
					<td><?php echo $row['day11'];?></td>
					<td><?php echo $row['day12'];?></td>
					<td><?php echo $row['day13'];?></td>
					<td><?php echo $row['day14'];?></td>
					<td><?php echo $row['day15'];?></td>
					<td><?php echo $row['day16'];?></td>
					<td><?php echo $row['day17'];?></td>
					<td><?php echo $row['day18'];?></td>
					<td><?php echo $row['day19'];?></td>
					<td><?php echo $row['day20'];?></td>
					<td><?php echo $row['day21'];?></td>
					<td><?php echo $row['day22'];?></td>
					<td><?php echo $row['day23'];?></td>
					<td><?php echo $row['day24'];?></td>
					<td><?php echo $row['day25'];?></td>
					<td><?php echo $row['day26'];?></td>
					<td><?php echo $row['day27'];?></td>
					<td><?php echo $row['day28'];?></td>
					<td><?php echo $row['day29'];?></td>
					<td><?php echo $row['day30'];?></td>
					<td><?php echo $row['day31'];?></td>
					<td><?php echo $row['ItemType'];?></td>
					<td><?php echo $row['Path'];?></td>
					
					
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
				
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Michelin</h3>
            <p>At MICHELIN, innovation is the creation of new value which is recognized by our customers. It has played and will continue to play a key role in the Group’s growth and performance. Putting innovation at the heart of our strategy is a firm conviction of ours: innovation, whatever its source, is the main driving force of our development, competitiveness and sustainability.
			</p>  </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             A1 SIPCOT Industrial Park,<br>
			 Thervoykandigai Village,<br> Gummidipoondi, 
			 <br>Thiruvallur, <br>
			 Chennai,<br>
			 Tamil Nadu 601202<br>
              <strong>Phone:</strong> 044 6791 6302<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/michelinindia?lang=en" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/MichelinIndia/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/michelin/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/michelin-india-tyres-pvt-ltd/about/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Michelin</strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- #footer -->

  <!-- JavaScript Libraries -->
  
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!--https://www.cloudways.com/blog/custom-php-mysql-contact-form/-->
  <!--https://www.formget.com/form-submission-using-ajax-php-and-javascript/-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>
