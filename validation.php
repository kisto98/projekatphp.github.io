<?php 
	session_start();
	$con=mysql_connect('localhost','root','');
	
	mysql_select_db($con, 'ebazzar');
	
	
		$Username=$_POST['username'];
		$Password=$_POST['pass'];
		
		$s="select * from users where Username= '$Username' && password= '$Password'";
		
		$result=mysql_query($con, $s);
		$num= mysql_num_rows($result);
		
		if($num ==1){
			echo "moze";
		}
		else 
			echo "mne mozew";


?>