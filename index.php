<?php session_start(); ?>
<?php
include("server.php");
$msg = "";
if(isset($_POST['login_btn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$msg = "";

	$_SESSION['username'] = $username;
	// query database
	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' limit 1";
	//saving the query as a result
	//$result = $conn->query($sql);
	$result =  mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==1){
		header("location: quiz.php");
	}
	else{
	 $msg = "invalid username/password";
	}
}
//This is just to see.




?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css" type="text/css">



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
						<h1><marquee behavior="scroll">Welcome to Abu-Hanifa CBT Engine</marquee></strong></h1>
						<h2>111 Sani Mainagge Gwale Local Government</h2>
						<h3>Kano State.</h3>
					</div>
				</td>
			</tr>
		</table>

		<h2  id = "xx" class="" style="text-align:center; color:#ff0000;"><?php echo $msg; ?></h2>
		<div class="login_form">
			<h3 style="color: #32B4C7;">Student Login</h3>
			<img src="icons/user.svg" alt="User Logo" width="20%" id="userlogo">
			<form action="#" method="post">

				<input type="text" name="username" placeholder="Enter Your Username">

				<br/><br/>

				<input type="password" name="password" placeholder="Enter Your Password">
				<br/><br/>
				<button name="login_btn" id="login_btn">Login</button>

			</form>
			</div>
		</body>
</html>
