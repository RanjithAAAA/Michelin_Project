<?php
   
   session_start();
   $conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");
   $error="";
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
      $usertype = $_POST['usertype']; 

      $sql = "SELECT * FROM newlogin WHERE username = ? and password = ?  and usertype =? ";
      $stmt=$conn->prepare($sql);
	  $stmt->bind_param("sss",$username,$password,$usertype);
	  $stmt->execute();
	  $result=$stmt->get_result();
      $row = $result->fetch_assoc();
      session_regenerate_id();
      
		
         $_SESSION['username'] = $row['username'];
		 $_SESSION['role'] = $row['usertype'];
		 session_write_close();
       if($result->num_rows==1 && $_SESSION['role']=="admin")
	   {
         header("location: admin.php");
      }
	  else if($result->num_rows==1 && $_SESSION['role']=="manager")
	   {
         header("location: manager.php");
      }
	   else if($result->num_rows==1 && $_SESSION['role']=="helpdesk")
	   {
         header("location: helpdesk.php");
      }
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
<title>Login</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<body>

<div class="container" >
      <div class="login">
         <div class="container">
              <h1 >Log in</h1>
			  <form action = "<?= $_SERVER['PHP_SELF']?>" method = "post">
              <input type="text" placeholder="Username" name="username" style="width: 100%;padding: 10px;margin-bottom: 30px;border: none; background-color: #eeeeef;">
              <input type="password" placeholder="Password" name="password"><br>
			  <div style="float: left; margin-right: 5px;">
			  <label for="usertype">I'm a:</label>
              <input type="radio" name="usertype" value="admin">&nbsp;Admin |
              <input type="radio" name="usertype" value="manager">&nbsp;Manager |
              <input type="radio" name="usertype" value="helpdesk">&nbsp;HelpDesk
			  </div>
			  <br>
              <button name="login" style="background: rgb(84,19,92);
              background: linear-gradient(90deg, rgba(84,19,92,1) 0%, rgba(10,48,206,1) 0%);">log in</button>
			  <h5 class="text-danger text-center"><?= $error; ?></h5>
              </form>
              
              <div class="clearfix"></div>
         </div>
      </div>
      <div class="register" style="background: rgb(84,19,92);
background: linear-gradient(90deg, rgba(84,19,92,1) 0%, rgba(10,48,206,1) 0%);">
          <div class="container">
              <i class="fas fa-user-plus fa-5x"></i>
              <h2>Welcome To Michlein Tyres Administration</h2>
              <p>Login in to upload the schedule for the day</p>
              <button>HOME<i class="fas fa-arrow-circle-right"></i></button>
          </div>
      </div>  
    </div>
</body>
</html>
