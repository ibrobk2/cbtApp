
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="#" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<style>
			.x{
				padding-right:22px;
				padding-left:22px;
				padding-top: 10px;
				padding-bottom:10px;
				margin-left: 90px;
				margin-right: 90px;
				margin-top: 15px;
				margin-bottom: 15px;
			
			}
			.fluid_container{
					text-align: center;
					padding:0px;
			}
			.header1{
				background-color: #333;
				
			}
			
		</style>
	</head>
	
	
	<body>
		<div class="fluid_container">
		<header class="header1">
			<div class="row">
				<a href="index.php" class="navbar btn btn-primary x" >Home</a>
			<!--	<a href="quiz.php" class="navbar btn btn-warning x" >Take Exam</a> -->
				<a href="#" class="navbar btn btn-success x" >Check Admission</a>
				<a href="index.php" onclick="<?php session_start(); session_destroy();?>" class="navbar btn btn-danger x" >Logout</a>
			
			</div>
		</header>
		
		</div>
	</body>


</html>