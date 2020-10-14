
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
     session_start();
	 if (isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['pass'];
	 
	 
		
		
		$query = "SELECT * FROM users WHERE Username='$myusername' AND Password='$mypassword' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$logged_in_user = mysqli_fetch_assoc($results);
		
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				$_SESSION['username']=$_POST['username'];
				header('location: indexv1.php');
			}
		else { $message = "neispravan username/password";
echo "<script type='text/javascript'>alert('$message');</script>";
			
	}
	 }

	 
?> 
<html>

<head>
	<title>E-bazzar login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<!--===============================================================================================-->	

<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
	<link href="assets/css/style.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logasset/css/util.css">
	<link rel="stylesheet" type="text/css" href="logasset/css/main.css">
<!--===============================================================================================-->


  <!-- Template Main CSS File -->
  
</head>
<body>
	<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">E-Bazzar</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Pocetna</a></li>
          <li><a href="#about">Kupovina</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav><!-- .nav-menu -->

        <a href="login.php" class="get-started-btn scrollto">Uloguj se</a>
	     <a href="singin.php" class="get-started-btn scrollto">Registruj se</a>

    </div>
  </header><!-- End Header -->
	
	
		<form action = "" method = "post" class="login100-form validate-form flex-sb flex-w" >
			<div class="container-login100">
				<div class="wrap-login100 p-t-50 p-b-90">
				
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
						<div>
							<a href="singin.html" class="txt1">
								Nemas nalog?
							</a>
						</div>
					</div>
							
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type = "submit" name= "login">
							Login
						</button>
						
					</div>

				
			</div>
		</div>
	</form>


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="logasset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="logasset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="logasset/vendor/bootstrap/js/popper.js"></script>
	<script src="logasset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="logasset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="logasset/vendor/daterangepicker/moment.min.js"></script>
	<script src="logasset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="logasset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="logasset/js/main.js"></script>

</body>
</html>

