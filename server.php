<?php 
//connect to the database using ('serverName', 'Username', 'Password' 'Database');
	$conn = new mysqli('localhost','root','','exam') or die(mysqli_connect_errno()."connection failed".mysqli_connect_error());
	//$conn =  mysqli_connect('localhost','root','','admin') or die(mysqli_connect_errno()."connection failed".mysqli_connect_error());

	/* //to check for connection 
	if(!$conn){
		echo "connection to the database failed!";
	}
	else{
		echo "connection successful!";
	}*/
	
	
	
?>