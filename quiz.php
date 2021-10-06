<?php  
	include ('database.php');
	//include 'header.php';
?>

<?php 
//Get the total number of Questions
$query = "SELECT * FROM questions";

//Get Result
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);

$total = $results->num_rows;

?>


<!DOCTYPE html>

<html>
<head>
	<title>Pre-Entrance Exams</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<div class='container'>
			<h1>Pre-Entrance Exam</h1>
		</div>
	</header>
	<main>
		<div class='container'>
			<h2>Test Your English</h2>
		
			<p><strong>Instructions:</strong>This is a multiple choice questions</p>
			<ul>
				<li><strong>Number of Question: &nbsp&nbsp</strong><?php echo $total;  ?></li>
				<li><strong>Type &nbsp&nbsp</strong>Multiple Choice</li>
				<li><strong>Estimated Time  &nbsp&nbsp</strong><?php echo $total*0.5 ?> Minutes</li>

			</ul>
			<a href="question.php?n=1" class="start">Start Exams</a>
			
			</div>

		</div>
	</main>
	<footer>
		<div class='container'>
			Copyright &copy Abu-Hanifa College 2019.
			
		</div>
	</footer>

</body>
</html>