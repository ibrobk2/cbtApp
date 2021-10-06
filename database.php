<?php
//creating a connection to the database
$host = "localhost";
$db = "exam";
$password ="";
$username ="root";

 // creating Mysqli object
 $mysqli = new mysqli($host, $username, $password, $db);

 //error handler
 if($mysqli->connect_error){
 	printf("Connection failed! \n", $mysqli->connect_error);
 	exit();
 }

