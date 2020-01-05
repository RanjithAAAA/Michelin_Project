<?php
   session_start();
   if(!isset($_SESSION['username'])|| $_SESSION['role']!="manager"){
	   header("location:login1.php");
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

        <div class="section-header">
		<h3>Welcome <?= $_SESSION['username'] ?>!!!</h3>
          <h3>Upload Scheulde</h3>
        </div>

        <div class="row wow fadeInUp">

         

          <div class="col-lg-12">
            
            <div class="form">
             
             <form action="manageredit.php" method="post" enctype="application/x-www-form-urlencoded">
             <div class="container">
   
             <hr>
    
             <label for="managerid"><b>Manager Chorus ID</b></label>
             <input type="number" placeholder="Enter your ChorusID" name="managerid" required>
	
            <div class="text-center">
	        <button href="manageredit.php?managerid=<?php echo $row["managerid"]; ?>" type="submit" name="submit">Submit</button>
            </div>
            </div>
                  
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

