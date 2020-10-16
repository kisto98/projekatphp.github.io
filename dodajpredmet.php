

<?php 
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "ebazzar");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
	
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
	$myime = mysqli_real_escape_string($db, $_POST['ime']);
	$mycena = mysqli_real_escape_string($db, $_POST['cena']);
	$myplacanje = mysqli_real_escape_string($db, $_POST['placanje']);
	$myisporuka = mysqli_real_escape_string($db, $_POST['isporuka']);

  	// image file directory
  	$target = "upload/".basename($image);

  	$sql = "INSERT INTO abba (image, image_text, Ime, Cena, Placanje, Isporuka) VALUES ('$image','$image_text','$myime','$mycena','$myplacanje','$myisporuka')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
  if(isset($_POST['logout'])) {
session_start();
session_unset();
session_destroy();

header("location:index.php"); }
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
 

<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
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
  </header>
<div id="content">
 
  <form method="POST" action="" enctype="multipart/form-data">
  <br><br><br>	
	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input class="button" type="file" name="image">
  	</div>
  	<div>
 <a> <input type="text" name="ime">Unesite ime predmeta </a> <br>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
		<a> <input type="text" name="cena">Unesite pocetnu cenu u dinarima</a> <br>
		<a> <input type="text" name="placanje">Unesite nacin placanja</a> <br>
		<a> <input type="text" name="isporuka">Unesite nacin isporuke</a> <br>
  	</div>
  	<div>
  		<button type="submit" name="upload">Postavi na aukciju</button>
  	</div>
  </form>
</div>
</body>
