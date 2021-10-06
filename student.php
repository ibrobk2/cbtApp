<?php 



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Abu Hanifa: e-Admission Processing System</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="fontawesome/css/all.css" type="text/css">
		<link rel="stylesheet" href="fontawesome/js/all.js" type="text/css">


		
		

		<style type="text/css">
		body{
			background-color: #F9F9F9;
		}

		h1,h2,h3{
			color: #00B0FF;
		}

			li{
				list-style: none;
			}
			
			a.start.x{
				background-color: #6C63FF;
				border:none;
			}

			a.start.y{
				background-color: #F50057;
				border:none;
			}

			a.start.z{background-color: #FFCD41;;}

			a.start{
			display: inline-block;
			color:#fff;
			background-color: #f4f4f4;
			border: 3px solid #ccc;
			padding: 100px 110px;
			border-radius: 5px;
			text-align: center;
			font-size: 18x;
			margin-left:30px;
			
		}
			a.start:hover{
			background-color: #101010;
			color:#fff;
		}
		hr{
			color:#fff;
			border-color: #fff;
			border-width: 4px;
		}
		.row{
		margin-left:165px;
		}
		

		</style>
	
	
	
	</head>
	<body>
	<div class="container">
		<table width="1200">
			<tr>
				<td width="7%">
					<div class="header_img">
						<img src="images/logo1.png" alt="School Logo" width="179" height="179"/>
		
					</div>
				</td>
				<td width="93%">	
					<div class="header_text">
						<h1><marquee behavior="scroll">Welcome to Abu-Hanifa e-Admission Processing System</marquee></strong></h1>
						<h2>111 Sani Mainagge Gwale Local Government</h2>
						<h3>Kano State.</h3>
					</div>
				</td>
			</tr>
			</table>
			<br />
		<table width= "1200" style="margin-left: 250px;" >
			<tr>
				<td>
					<ul id="nav">
						<li style="padding-right:2px; padding-left: 2px; "><a href="index.php" class="start">Home</a></li>
						
						<li style="padding-right:2px; padding-left: 2px; "><a href="#" class="start">News</a></li>
						<li style="padding-right:2px; padding-left: 2px; "><a href="#" class="start">Staff</a></li>
						<li style="padding-right:2px; padding-left: 2px; "><a href="#" class="start">Gallery</a></li>
						<li style="padding-right:2px; padding-left: 2px; "><a href="about.php" class="start">About</a></li>
						
				
					</ul>
				</td>
			</tr>
			</table>
					<br>
					<hr />
					<hr />
			<div class="row">
						<a href="newStudent.php" class="start col-xs-4 x"><i class="fas fa-user fa-3x"></i><br>New Student</a>
						<a href="transferStudent.php" class="start col-xs-4 y"><i class="fas fa-user fa-3x"></i><br>Transfer Student</a>
						
								
			</div>
		</div>
		<hr />
		<hr />
	</body>

</html>