<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	session_start();
	$sql= "SELECT * FROM abba";
	$result=mysqli_query($db,$sql) or die("bq $sql");
	
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

 <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="justify-content-center">
          <h1>Online kupovina i prodaja, pijaca na vasem dlanu</h1>
          <h2>Najraznovrsnija i najjeftinija roba na jednom kliku od vas!</h2>
        </div>
       </div>
    </div>
</section><!-

<br><br><br>


    
<?php 
if(mysqli_num_rows($result) > 0) {
	echo"<table>";
	while($row = mysqli_fetch_array($result)) {
		echo"<tr>";
		echo"<td>";
		 echo "<img src='upload/{$row['image']}' width='100px' hight='100px'  alt='{$row['Ime']}' ";
		echo"</td>";
		echo"<td>";
		echo"<a href='details.php?id={$row['id']}'>{$row['Ime']}</a> ";
		echo"</td>";
		echo"<td>";
		echo"<a href='details.php?id={$row['id']}'>{$row['image_text']}</a> ";
		echo"</td>";
		echo"<td>";
		
		echo"<a href='details.php?id={$row['id']}'>{$row['Placanje']}</a> ";
	
		echo"</td>";
		echo"<td>";
		echo"<a href='details.php?id={$row['id']}'>{$row['Isporuka']}</a> ";
		echo"</td>";
		echo"<td>";
		echo"<a href='details.php?id={$row['id']}'>{$row['Cena']}</a> ";
		echo"</td>";
	echo"</tr>";
	}
	echo"</table>";
}
?>

</body>
</html>