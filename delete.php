<?php session_start(); ?>
<?php include "database.php";?>
<?php include("header4.php")?>



<?php
	if(isset($_POST['submit'])){
       

		// Get the POST variables
        $question_number = $_POST['question_number'];
         //create a query to fetch all data
         $sql = "SELECT * FROM questions WHERE question_number = '$question_number'";
         //run query
         $select = mysqli_query($mysqli, $sql);

         // fetch row
         
			if($row = mysqli_fetch_assoc($select)){
			$row1 = $row['question_number'];
			 $sql = "DELETE FROM questions WHERE question_number = '$row1' ";
			  mysqli_query($mysqli, $sql);
			}
			  //*********for deleting choices************//
			  $sql = "SELECT * FROM choices WHERE question_number = '$question_number'";
         //run query
         $select = mysqli_query($mysqli, $sql);

         // fetch row
         
			if($row = mysqli_fetch_assoc($select)){
			$row1 = $row['question_number'];
			 $sql = "DELETE FROM choices WHERE question_number = '$row1' ";
			  mysqli_query($mysqli, $sql);

			 
			}


       

		//$correct_choice = $_POST['correct_choice'];

	
    }

		
			
			$msg = "Question Has Been Deleted Successful!";
		


	

 ?>
<!DOCTYPE html>

<html>
<head>
	<title>Examiner's Panel</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		
		<div class='container'>
			<!--
			<h2>Exam Section</h2>-->
		</div>
	</header>
	<main>
		<div class='container'>
			<h2>Delete A Question</h2>
			<?php 
				if(isset($_POST['submit'])){
					echo "<p style='color: #ff0000;'>".$msg."</p>";
				}
			?>
			<form method="post" action="delete.php">
				
				<p>
					<label>Enter Question Number:</label>
					<input type="number"  name="question_number" />
				
				<p>
					
					<input type="hidden" name = 'n'/>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 14px 16px; font-size: 20px;" />
				</p>
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