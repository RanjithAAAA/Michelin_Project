<?php
   session_start();
   if(!isset($_SESSION['username'])|| $_SESSION['role']!="manager"){
	   header("location:login1.php");
   }
?>
<?php
 $conn = new mysqli("localhost","root","","login");
	$ChorusID=$_REQUEST['ChorusID'];
	$sql="SELECT * FROM schedule where ChorusID='".$ChorusID."'";
    $result = mysqli_query($conn,$sql) or die ( mysqli_error());
   $row = mysqli_fetch_assoc($result); 

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
  <style>
input[type=text], input[type=time] ,input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
   border: 2px solid blue;
  border-radius: 4px;
  background: #f1f1f1;
}
</style>
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
			
             
            <?php
 $status = "";
if(isset($_POST['submit'])) { 
  
    
	$ChorusID =$_REQUEST['ChorusID'];$EmployeeName =$_REQUEST['EmployeeName'];$managerid=$_REQUEST['managerid'];
    $Gender=$_REQUEST['Gender'];$MobileNumber1=$_REQUEST['MobileNumber1']; $PickUpLocation=$_REQUEST['PickUpLocation']; 
	$PickupSchedule=$_REQUEST['PickupSchedule'];$PickupTimeShiftA=$_REQUEST['PickupTimeShiftA'];
	$PickupTimeShiftB=$_REQUEST['PickupTimeShiftB'];
	$PickupTimeShiftC=$_REQUEST['PickupTimeShiftC'];$PickupTimeShiftG=$_REQUEST['PickupTimeShiftG'];
	$RouteNumber=$_REQUEST['RouteNumber'];$day1=$_REQUEST['day1'];$day2=$_REQUEST['day2'];$day3=$_REQUEST['day3']; 
	$day4=$_REQUEST['day4'];$day5=$_REQUEST['day5'];$day6=$_REQUEST['day6'];$day7=$_REQUEST['day7'];
	$day8=$_REQUEST['day8'];$day9=$_REQUEST['day9'];$day10=$_REQUEST['day10'];$day11=$_REQUEST['day11'];  
   	$day12=$_REQUEST['day12']; $day13=$_REQUEST['day13'];$day14=$_REQUEST['day14'];$day15=$_REQUEST['day15']; 
	$day16=$_REQUEST['day16'];$day17=$_REQUEST['day17'];$day18=$_REQUEST['day18'];$day19=$_REQUEST['day19'];
	$day20=$_REQUEST['day20'];$day21=$_REQUEST['day21'];$day22=$_REQUEST['day22'];$day23=$_REQUEST['day23'];  
   	$day24=$_REQUEST['day24']; $day25=$_REQUEST['day25'];$day26=$_REQUEST['day26'];
	$day27=$_REQUEST['day27'];$day28=$_REQUEST['day28'];$day29=$_REQUEST['day29'];
    $day30=$_REQUEST['day30'];$day31=$_REQUEST['day31'];$ItemType=$_REQUEST['ItemType']; 
	$Path=$_REQUEST['Path'];
	 
	 $update="update schedule set EmployeeName='".$EmployeeName."',managerid='".$managerid."',
Gender='".$Gender."', MobileNumber1='".$MobileNumber1."',
PickUpLocation='".$PickUpLocation."',PickupSchedule='".$PickupSchedule."',PickupTimeShiftA='".$PickupTimeShiftA."',PickupTimeShiftB='".$PickupTimeShiftB."',
 PickupTimeShiftC='".$PickupTimeShiftC."',PickupTimeShiftG='".$PickupTimeShiftG."',RouteNumber='".$RouteNumber."',
 day1='".$day1."',day2='".$day2."',day3='".$day3."',
 day4='".$day4."',day5='".$day5."',day6='".$day6."',day7='".$day7."',
 day8='".$day8."',day9='".$day9."',day10='".$day10."',
 day11='".$day11."',day12='".$day12."',day13='".$day13."',day14='".$day14."',
 day15='".$day15."',day16='".$day16."',day17='".$day17."',day18='".$day18."',
 day19='".$day19."',day20='".$day20."',day21='".$day21."',day22='".$day22."',
 day23='".$day23."',day24='".$day24."',day25='".$day25."',day26='".$day26."',
 day27='".$day27."',day28='".$day28."',day29='".$day29."',day30='".$day30."',
 day31='".$day31."',ItemType='".$ItemType."',Path='".$Path."' where ChorusID='".$ChorusID."'";
	mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='manager.php'>Go to View Updated Record</a>";
echo '    <div class="text-center">
<h3><span>&#128077;</span><p style="color:#FF0000;">'.$status.'</p></h3></div>';
}	  
else {
?>
<form action="" method="post" enctype="application/x-www-form-urlencoded">
  <div class="container">
    <h3>Edit Employee Information</h3>
   
    <hr>
	<div class="row">
	
    <input name="ChorusID" type="hidden" value="<?php echo $row['ChorusID'];?>" />
	<div class="col">
    <label for="EmployeeName"><b>Employee Name</b></label>
    <input type="text"  name="EmployeeName" value="<?php echo $row['EmployeeName'];?>">
    </div>
	<div class="col">
	 <label for="managerid"><b>Managerid</b></label>
    <input type="number"  name="managerid" value="<?php echo $row['managerid'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
    <label for="Gender"><b>Gender</b></label>
    <input type="text"  name="Gender" value="<?php echo $row['Gender'];?>" >
	</div>
	<div class="col">
	<label for="MobileNumber1"><b>Mobile Number1</b></label>
    <input type="number"  name="MobileNumber1" value="<?php echo $row['MobileNumber1'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
	<label for="PickUpLocation"><b>Pick Up Location</b></label>
    <input type="text"  name="PickUpLocation" value="<?php echo $row['PickUpLocation'];?>" >
	</div>
	<div class="col">
	<label for="PickupSchedule"><b>Pickup Schedule</b></label>
    <input type="text"  name="PickupSchedule" value="<?php echo $row['PickupSchedule'];?>" >
	</div>
	</div>
	<div class="row">
    <div class="col">
	<label for="PickupTimeShiftA"><b>PickupTime ShiftA</b></label>
    <input type="text"  name="PickupTimeShiftA" value="<?php echo $row['PickupTimeShiftA'];?>" >
	</div>
	
	<div class="col">
	<label for="PickupTimeShiftB"><b>PickupTime ShiftB</b></label>
    <input type="text"  name="PickupTimeShiftB" value="<?php echo $row['PickupTimeShiftB'];?>">
      </div>
	  </div>
	  <div class="row">
	  <div class="col">
 <label for="PickupTimeShiftC"><b>PickupTime ShiftC</b></label>
    <input type="text"  name="PickupTimeShiftC" value="<?php echo $row['PickupTimeShiftC'];?>" >
	</div>
	<div class="col">
    <label for="PickupTime ShiftG"><b>PickupTime ShiftG</b></label>
    <input type="text"  name="PickupTimeShiftG" value="<?php echo $row['PickupTimeShiftG'];?>" >
	
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="RouteNumber"><b>Route Number</b></label>
    <input type="text"  name="RouteNumber" value="<?php echo $row['RouteNumber'];?>" >
	</div>
	</div>
	
 <div class="row">
 <div class="col">
 <label for="day1"><b>day1</b></label>
    <input type="text"  name="day1" value="<?php echo $row['day1'];?>" >
	</div>
	<div class="col">
 <label for="day2"><b>day2</b></label>
    <input type="text"  name="day2" value="<?php echo $row['day2'];?>" >
	</div>
	<div class="col">
 <label for="day3"><b>day3</b></label>
    <input type="text"  name="day3" value="<?php echo $row['day3'];?>" >
	</div>
	<div class="col">
 <label for="day4"><b>day4</b></label>
    <input type="text"  name="day4" value="<?php echo $row['day4'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day5"><b>day5</b></label>
    <input type="text"  name="day5" value="<?php echo $row['day5'];?>" >
	
	</div>
	<div class="col">
 <label for="day6"><b>day6</b></label>
    <input type="text"  name="day6" value="<?php echo $row['day6'];?>" >
	</div>
	<div class="col">
 <label for="day7"><b>day7</b></label>
    <input type="text"  name="day7" value="<?php echo $row['day7'];?>" >
	</div>
	<div class="col">
 <label for="day8"><b>day8</b></label>
    <input type="text"  name="day8" value="<?php echo $row['day8'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day9"><b>day9</b></label>
    <input type="text"  name="day9" value="<?php echo $row['day9'];?>" >
	</div>
	<div class="col">
 <label for="day10"><b>day10</b></label>
    <input type="text"  name="day10" value="<?php echo $row['day10'];?>" >
	</div>
	<div class="col">
 <label for="day11"><b>day11</b></label>
    <input type="text"  name="day11" value="<?php echo $row['day11'];?>" >
	</div>
	<div class="col">
 <label for="day12"><b>day12</b></label>
    <input type="text"  name="day12" value="<?php echo $row['day12'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day13"><b>day13</b></label>
    <input type="text"  name="day13" value="<?php echo $row['day13'];?>" >
	</div>
	<div class="col">
    <label for="day14"><b>day14</b></label>
    <input type="text"  name="day14" value="<?php echo $row['day14'];?>" >
	</div>
	<div class="col">
 <label for="day15"><b>day15</b></label>
    <input type="text"  name="day15" value="<?php echo $row['day15'];?>" >
	</div>
	<div class="col">
	<label for="day16"><b>day16</b></label>
    <input type="text"  name="day16" value="<?php echo $row['day16'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day17"><b>day17</b></label> 
    <input type="text"  name="day17" value="<?php echo $row['day17'];?>" >
	</div>
	<div class="col">
 <label for="day18"><b>day18</b></label>
    <input type="text"  name="day18" value="<?php echo $row['day18'];?>" >
	</div>
	<div class="col">
 <label for="day19"><b>day19</b></label>
    <input type="text"  name="day19" value="<?php echo $row['day19'];?>" >
	</div>
	<div class="col">
 <label for="day20"><b>day20</b></label>
    <input type="text"  name="day20" value="<?php echo $row['day20'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day21"><b>day21</b></label>
    <input type="text"  name="day21" value="<?php echo $row['day21'];?>" >
	</div>
	<div class="col">
	<label for="day22"><b>day22</b></label>
    <input type="text"  name="day22" value="<?php echo $row['day22'];?>" >
	</div>
	<div class="col">
 <label for="day23"><b>day23</b></label>
    <input type="text"  name="day23" value="<?php echo $row['day23'];?>" >
	</div>
	<div class="col">
 <label for="day24"><b>day24</b></label>
    <input type="text"  name="day24" value="<?php echo $row['day24'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day25"><b>day25</b></label>
    <input type="text" name="day25" value="<?php echo $row['day25'];?>" >
	</div>
	<div class="col">
 <label for="day26"><b>day26</b></label>
    <input type="text"  name="day26" value="<?php echo $row['day26'];?>" >
	</div>
	<div class="col">
 <label for="day27"><b>day27</b></label>
    <input type="text"  name="day27" value="<?php echo $row['day27'];?>" >
	</div>
	<div class="col">
	<label for="day28"><b>day28</b></label>
    <input type="text"  name="day28" value="<?php echo $row['day28'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="day29"><b>day29</b></label>
    <input type="text"  name="day29" value="<?php echo $row['day29'];?>" >
	</div>
	<div class="col">
 <label for="day30"><b>day30</b></label>
    <input type="text"  name="day30" value="<?php echo $row['day30'];?>" >
	</div>
	<div class="col">
 <label for="day31"><b>day31</b></label>
    <input type="text"  name="day31" value="<?php echo $row['day31'];?>" >
	</div>
	</div>
	<div class="row">
	<div class="col">
 <label for="ItemType"><b>ItemType</b></label>
    <input type="text"  name="ItemType" value="<?php echo $row['ItemType'];?>" >
	</div>
	<div class="col">
 <label for="Path"><b>Path</b></label>
    <input type="text"  name="Path" value="<?php echo $row['Path'];?>" >
	</div>
	</div>
	
    <hr>

    <div class="text-center">
    <button type="submit" name="submit">Submit</button>
    </div>
	</div>
  <?php } ?>

</form>

				
				
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
