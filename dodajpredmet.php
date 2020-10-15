<?php
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'ebazzar');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
     session_start();

if(isset($_POST['but_upload'])){
  
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir.basename($_FILES["file"]["name"]);
//$opis = ($_POST['imepredmeta']);
//$opis= mysqli_real_escape_string($db, $_POST['imepredmeta']);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "INSERT INTO probna(name) VALUES('$name')";
	// $sql = "INSERT INTO probna (name) VALUES ('".$name.")";
   //  mysqli_query($db,$sql);
	 mysqli_query($db,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>
<html>
<head>

</head>
<body>
<br>


 <form method="POST" action="	" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="name">
</div>
 	<div>
     <input type="text" name="imepredmeta" placeholder="Unesite ime predmeta"> <br>
  	</div>
  	<div>
  		<button type="submit" name="but_upload">POST</button>
  	</div>
  </form>
</div>

</body>
</html>