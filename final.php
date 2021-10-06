<?php session_start(); ?>
<?php  
	include 'header.php';
?>
<!DOCTYPE html>

<html>
<head>
	<title>Pre-Entrance Exams</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<header>
		<div class='container'>
			<h1>Pre-Entrance Exam</h1>
		</div>
	</header>
	<main>
		<div class='container'>
			<h2>You are Done!</h2>
			<p>thank you,you can now check for admission</p>
			<p>Final Score:<?php echo $_SESSION['score']; ?></p>
			<a href="exam_login.php" onclick="<?php session_destroy(); ?>"  class="start">Logout</a>

		</div>
	</main>
	<footer>
		<div class='container'>
			Copyright &copy Abu-Hanifa College 2019.
			
		</div>
	</footer>

</body>
</html>