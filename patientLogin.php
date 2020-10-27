<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	
	
	<!-- Favicons -->
  <link href="assets/img/logo_icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
</head>

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
	    <div class="logo">
            <a href="index.html">
            <img src="img/logo_icon.png" alt="" height="50px" width="50px"></img>
            </a>
         </div>

      <h1 class="logo mr-auto"><a href="index.html">CovidAid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="welcome.html">Home</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->
	   
    

    </div>
  </header><!-- End Header -->


<body>


<br>
	<br>
	<br>
	<br>
 <header>
        
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 login-left">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  method = "post" action="patientValidation.php">
					<span class="login100-form-title">
						Login As Patient
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="patientUsername" placeholder="patientUsername">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<br>
					<br>
					<p>patientType</p>
						<input type="radio" id="patient" name="userType" value="patient">
						<label for="recycler">Returnee</label>
						<br>
						 <input type="radio" id="manager" name="userType" value="manager">
						<label for="collector">Quarintined</label>
						<br>
						<input type="radio" id="manager" name="userType" value="manager">
						<label for="collector">Close Contact</label>
						<br>
						<input type="radio" id="manager" name="userType" value="manager">
						<label for="collector">Infected</label>
						<br>
						<input type="radio" id="manager" name="userType" value="manager">
						<label for="collector">Suspected</label>
					<br>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="loginPatient" type="submit" value="loginPatient">
							Login As Patient
						</button>
					</div>
						<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up 
						</a>
					</div>
					
					</div>
				</form>
			</div>
		</div>

		
	</div>
	
	<div class="container-login100">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  method = "post" action="register1.php">
					<span class="login100-form-title">
						Sign Up 
					</span>
					  <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="username" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="password" required>
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter name">
						<input class="input100" type="text" name="name" placeholder="name" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter address">
						<input class="input100" type="text" name="address" placeholder="address" required>
						<span class="focus-input100"></span>
					</div>
					<p>UserType</p>
						 <input type="radio" id="patient" name="userType" value="patient">
						<label for="recycler">Patient</label>
						<br>
						 <input type="radio" id="manager" name="userType" value="manager">
						<label for="collector">Manager</label>
					<br>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"  name="register" id="submit" >
							Register 
						</button>
					</div>
				</form>
			</div>
		</div>
		
		
		
		
		
		
		
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>