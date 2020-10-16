<?php
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
     session_start();
	    if (isset($_POST['singin'])) {
	 
		 global $db, $errors;
	$myusername    =  ($_POST['username']);
	$mypassword  =  ($_POST['password']);
	$mypassword1  =  ($_POST['repassword']);
	$mygrad  =  ($_POST['grad']);
	$myulicabroj  =  ($_POST['ulica']);
	$myemail  =  ($_POST['email']);
	$mytelefon  =  ($_POST['telefon']);
	 
	$query1 = "SELECT 'Email' FROM 'users' WHERE Email=?";
$query1 = mysqli_query($db, "SELECT * FROM users WHERE Email='".$myemail."'");
$query2 = "SELECT 'Username' FROM 'users' WHERE Username=?";
$query2 = mysqli_query($db, "SELECT * FROM users WHERE Username='".$myusername."'");
  if (mysqli_num_rows($query2)!=0){
	  	$message = "username je zauzet";
echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else{
    if (mysqli_num_rows($query1)!=0)
    {
       	$message = "email je zauzet";
echo "<script type='text/javascript'>alert('$message');</script>";
	}
    else {
	
			if($mypassword==$mypassword1){
			$query = "INSERT INTO users (Username, Password, Grad, Ulicabroj, Email, Telefon) 
					  VALUES('$myusername', '$mypassword', '$mygrad', '$myulicabroj', '$myemail', '$mytelefon')";
			mysqli_query($db, $query);
	
			$_SESSION['success']  = "New user successfully created!!";
			header('location: login.php');}
				else{
						$message = "password je netacan";
echo "<script type='text/javascript'>alert('$message');</script>";
				}

			}	
		}
		}
?>

<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ebazzar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
   <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
   <link href="singinasset/css/main.css" rel="stylesheet">
   
   
   <!-- iz drugog >
   <!-- Icons font CSS-->
    <link href="singinasset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="singinasset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="singinasset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="singinasset/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="singinasset/css/main.css" rel="stylesheet" media="all"> 
</head>

<body>
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">E-Bazzar</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Pocetna</a></li>
          <li><a href="kupovina.php">Kupovina</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav><!-- .nav-menu -->

        <a href="login.php" class="get-started-btn scrollto">Uloguj se</a>
	     <a href="singin.php" class="get-started-btn scrollto">Registruj se</a>
    </div>
  </header><!-- End Header -->
  
  
  <div class="page-wrapper  p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Unesite vase podatke da bi ste se registrovali</h2>
                </div>
                <div class="card-body">
						<form method="POST">
                         <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username">
                                </div>
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
						
						 <div class="form-row">
                            <div class="name">Ponovite password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="repassword">
                                </div>
                            </div>
                        </div>
						
                        <div class="form-row">
                            <div class="name">Grad</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="grad">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Ulica i broj</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ulica">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="telefon">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="singin">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Jquery JS-->
    <script src="singinasset/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="singinasset/vendor/select2/select2.min.js"></script>
    <script src="singinasset/vendor/datepicker/moment.min.js"></script>
    <script src="singinasset/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="singinasset/js/global.js"></script>

</body>
</html>