<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View / Edit Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            background-color: #f4f4f4;
        }

    </style>
</head>
<body>
<!--connect form handler process.php -->
<div class="container">
    <?php require_once "process1.php"; ?>

    <?php
        if(isset($_SESSION['message'])):?>
        <div class="alert-<?=$_SESSION['msg_type']?>">
        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']); 
        ?>
        </div>
<?php endif; ?>
    <?php 
    //connect to db crud and select all records from 'items' table
    $mysqli = new mysqli('localhost', 'root', '', 'admin') or die(mysqli_error($mysqli).mysql_errno());
    
    //using sql query to select * from items.
    $result = $mysqli->query("SELECT * FROM user") or die($mysqli->error);
    //pre_r($result);
    //pre_r($result->fetch_assoc());
  
    ?>
    <div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Admission No.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Age</th>
                <th>Class</th>
                <th>Exam Score</th>
                <th>Admission Status</th>
                <th>Parent Phone</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <?php
            while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['id'] + 2019;?></td>
            <td><?php echo $row['firstName'].' '. $row['surName'].' ' .$row['middleName'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo date('Y, F, d')-$row['dob'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['testScore'];?></td>
            <td><?php echo $row['admstatus'];?></td>
            <td><?php echo $row['phoneNumber'];?></td>
            <td>
                <a href="newReg.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
                <a href="process1.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>

            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    </div>
    <?php
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        }
    ?>
    
 </div>
 </div>
</body>
</html>
