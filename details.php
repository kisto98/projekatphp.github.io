<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "ebazzar");
  $id=mysqli_real_escape_string($db, $_GET['id']);
  
  $sql="SELECT * FROM abba WHERE id='$id' ";
  $result=mysqli_query($db,$sql);
  $row=mysqli_fetch_assoc($result);
 
 $staracena=0;
   $slqi="SELECT * FROM abba WHERE Cena='$staracena'";
   $results=mysqli_query($db,$slqi);
   $strcn=mysqli_fetch_assoc($results);
  $ncena=($_POST['novacena']);
  if (isset($_POST['ponudi'])) {
	if($ncena>$strcn){
		$sqloo="UPDATE abba set Cena=$ncena WHERE id=$id)";
		mysqli_query($db,$sqloo);
	}
		else { $message = "neispravna cena";
echo "<script type='text/javascript'>alert('$message');</script>";
  }	  
 }
 
  
?>

<html>
<head>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
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
</head>

<body>
<content>
<br><br><br><br><br>
<p>Ime: <?php echo $row['Ime']   ?> </p>
<p>Opis: <?php echo $row['image_text']   ?> </p>
<p>Cena: <?php echo $row['Cena']   ?> <p>
<p>Placanje: <?php echo $row['Placanje']   ?> </p>
<p>Isporuka: <?php echo $row['Isporuka']   ?> </p>
<img src='upload/<?php echo $row['image']?>' id="slikaopis">
<form method="POST" action="">
<input type="text" name="novacena">
<button type="submit" name="ponudi">Ponudi novu cenu</button>
</form>
</content>
</body>
</html>