<?php session_start(); ?>
<?php include("database.php"); ?>
<?php include("server.php"); ?>

<?php 
//Check to see of score is set
if(!isset($_SESSION['score'])){
	$_SESSION['score'] = 0;
}
//Grab the answer of the user
if($_POST){

	$number = $_POST['number'];
	$selected_choice = $_POST['choice'];
	$next = $number+1;
	//$_SESSION['next'] = $next;
	/*
	*Get the total questions
	*/
	$query1 = "SELECT * FROM `questions` ";
	$results = $mysqli->query($query1) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;


	/*
	*Get the correct choice
	*/

	$query2 = "SELECT * FROM `choices` 
		WHERE question_number = $number AND is_correct = 1";

	$result = $mysqli->query($query2) or die($mysqli->error.__LINE__);

	//Get the row
	$row = $result->fetch_assoc();

	//Set the correct choice
	$correct_choice = $row['id'];

	//Compare
	if($correct_choice==$selected_choice){

		// The answer is correct then add to 1 to our SESSION variable ($_SESSION['score'])

		$_SESSION['score']+=1;

	}

	//Checking if the question is the last question or not
	if($number==$total){
		if(isset($_SESSION['username'], $_SESSION['score'])){
			$tscore = $_SESSION['score'];
			$username = $_SESSION['username'];
			$perScore = ($tscore/$total)*100;
			//create query
			$sql = "UPDATE user SET testScore = '$tscore' WHERE username = '$username' "; 
			//run query
			mysqli_query($conn, $sql) or die("Error connecting to database").$conn->error.__LINE__;
			
			if($perScore <50){
            $sql = "UPDATE user SET admstatus = 'notAdmitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
        } else{
            $sql = "UPDATE user SET admstatus = 'Admitted' WHERE username = '$username' ";
                mysqli_query($conn, $sql);
        }

		}

		header("Location: final.php");
		exit();
	} else{
		header("Location: question.php?n=".$next);
	}


}
?>