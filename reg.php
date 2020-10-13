<?php 
	

	$con=mysql_connect('localhost','root','""');
	
	mysql_select_db($con, 'ebazzar');
	
	
		$uname=$_POST['username'];
		$pswrd=$_POST['pass'];
		
		$s="select * from users where Username= '$uname'";
		
		$result=mysql_query($con, $s);
		$num= mysql_num_rows($result);
		
		if($num ==1){
			echo "ne moze";
		}
		else 
			$reg="insert into users (Username, Password) values ('uname', 'pswrd')";
		    mysql_query($con, $reg);
			echo "uso";


?>