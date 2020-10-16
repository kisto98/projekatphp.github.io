<?php 
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
     session_start();
if (isset($_POST['promenius']))	{
	$uname1=($_POST['stariuname']);
	$uname=($_POST['newusername']);

	//$sql = "UPDATE users SET Username='$uname' WHERE Username='$stariuname' ";
	$sql=("UPDATE users SET Username ='".$uname."'  WHERE Username = '".$uname1."' ");
	mysqli_query($db, $sql);
$message = "promenili ste username";
echo "<script type='text/javascript'>alert('$message');</script>";	
 }
if (isset($_POST['promenipass']))	{
	$upass1=($_POST['staripass']);
	$upass=($_POST['newpass']);

	//$sql = "UPDATE users SET Password='$uname' WHERE Username='$stariuname' ";
	$sql=("UPDATE users SET Password ='".$upass."'  WHERE Password = '".$upass1."' ");
	mysqli_query($db, $sql);
$message = "promenili ste passwrod";
echo "<script type='text/javascript'>alert('$message');</script>";	
}
if (isset($_POST['promeniemail']))	{
	$umej1=($_POST['stariemail']);
	$umej=($_POST['newemail']);

	//$sql = "UPDATE users SET Password='$uname' WHERE Username='$stariuname' ";
	$sql=("UPDATE users SET Email ='".$umej."'  WHERE Email ='".$umej1."' ");
	mysqli_query($db, $sql);
$message = "promenili ste email";
echo "<script type='text/javascript'>alert('$message');</script>";	
}
?>
<?php
if (isset($_POST['logout']))	{
session_start();
session_unset();
session_destroy();

header("location:index.php");
exit();}
?>
	 


<html>
<head>
 <title>Ebazzar</title>
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
 
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">E-Bazzar</a></h1>
      <nav class="nav-menu d-none d-lg-block">
       <ul>
          <li class="active"><a href="index.html">Pocetna</a></li>
          <li><a href="#about">Kupovina</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        
    <!-- .nav-menu -->
		
<li class="drop-down"> <input type="button" class="get-started-btn scrollto" id="usernam" value="<?php echo $_SESSION["username"]; ?>"/> 
	<ul>
	 <li><a href="#about">Settings</a></li>
          <form method="POST">
		  <li><a href="#kontakt" name="logout">Logout</a></li>
		  </form>
	</ul>

</li>
</ul>
    </nav>
      </div>
  </header><!-- End Header -->
</head>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="indexv1.php">E-Bazzar</a></h1>
      <nav class="nav-menu d-none d-lg-block">
       <ul>
          <li class="active"><a href="indexv1.php">Pocetna</a></li>
          <li><a href="kupovinav1.php">Kupovina</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        
    <!-- .nav-menu -->
		
<li class="drop-down"> <input type="button" class="get-started-btn scrollto" id="usernam" value="<?php echo $_SESSION["username"]; ?>"/> 
	<ul>
	 <li><a href="settings.php">Settings</a></li>
          <li><a href="#kontakt">Moje ponude</a></li>
		  <li><a href="#">Moje aukcije</a></li>
        
	</ul>

</li>

   <form method="POST">
		  <button class="login100-form-btn" type = "submit" name= "logout">Logout</button>
		 </form>
  </nav>
  </ul>
    </div>
  </header><!-- End Header -->
  <br><br><br>
<div class="section-title">
<div class="section-title">
<body>
<form method = "post" action="">
<br><br><br><input type="text" name="stariuname" placeholder="Unesite stari username">
<input type="text" name="newusername" placeholder="Unesite novi username">
<button class="login100-form-btn" type = "submit" name= "promenius" >Promeni username</button> 
</form>
</div>
<div class="section-title">
<form method = "post" action="">
<input type="text" name="staripass" placeholder="Unesite stari password">
<input type="text" name="newpass" placeholder="Unesite novi password">
<button class="login100-form-btn" type = "submit" name= "promenipass" >Promeni password</button> 
</form>
</div>
<div class="section-title">
<form method = "post" action="">
<input type="text" name="stariemail" placeholder="Unesite stari email">
<input type="text" name="newemail" placeholder="Unesite novi email">
<button class="login100-form-btn" type = "submit" name= "promeniemail" >Promeni email</button> 
</form>
</div>
</div>
</body>
</html>