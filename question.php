<?php session_start(); ?>
<?php  
	include ('database.php');
	//include 'header.php';
?>

<?php 
//Set Question number
$number = $_GET['n'];
$_SESSION['n'] = $number;

//Get Question 
$query = "SELECT * FROM questions
			WHERE question_number = $number";

//Get Result
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

//Get Choices 
$query1 = "SELECT * FROM choices
			WHERE question_number = $number";

//Get Result
$choices = $mysqli->query($query1) or die($mysqli->error.__LINE__);

//Get total number of questions
$query2 = "SELECT * FROM questions";

$results = $mysqli->query($query2) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>

<!DOCTYPE html>

<html>
<head>
	<title>Pre-Entrance Exams</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style type="text/css">
		/* Customize the label (the container) */
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}


	
</style>




	

</head>
<body>

	<header>
		<div class='container'>
			<h1>Pre-Entrance Exam</h1>

		
	</header>
	<br>
	<main>
		<div class='container'>
			<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total;?> </div>
			<div>
				<h2 id="timer"></h2>
			</div>
			<p class="question">
				<?php echo $question['text']; ?>
			</p>


			<form method="post" action="process.php">
			
				<ul class="choices">
				<?php while($row=$choices->fetch_assoc()){ ?>
				<label class="container1">
					<li><input type="radio" name="choice" value = "<?php echo $row['id'];  ?>" /><span class="checkmark"></span><?php echo $row['text']; ?></li>
				</label>
				<?php } ?>
				
			</ul>
		
				<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-warning">
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				
			</form>
			

		</div>
	</main>
	<footer>
		<div class='container'>
			Copyright &copy Abu-Hanifa College 2019.
			
		</div>
	</footer>

</body>
</html>
