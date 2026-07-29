<?php

include "includes/config.php";

session_start();

if(!isset($_GET['id'])){

    die("Student ID not found.");

}

$id = $_GET['id'];

/* Intentionally vulnerable query */

$query = "SELECT * FROM student_details WHERE id=$id";

$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>

<html>

<head>

<title>Student Profile</title>

<style>

body{

    font-family:Arial;
    background:#f4f4f4;

}

.container{

    width:700px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px gray;

}

.info{

    background:#f8f9fa;
    border-left:5px solid #007bff;
    padding:15px;
    margin:15px 0;
    border-radius:5px;

}

.btn{

    display:inline-block;
    padding:10px 20px;
    background:#007bff;
    color:white;
    text-decoration:none;
    border-radius:5px;

}

</style>

</head>

<body>

<div class="container">

<h2>

Student Profile

</h2>

<?php

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

?>

<div class="info">

<b>Username:</b>

<?php echo $row['username']; ?>

<br><br>

<b>Department:</b>

<?php echo $row['department']; ?>

<br><br>

<b>Year:</b>

<?php echo $row['year']; ?>

<br><br>

<b>CGPA:</b>

<?php echo $row['cgpa']; ?>

</div>

<?php

}else{

echo "Student record not found.";

}

?>

<br>

<a class="btn" href="challenge4.php">

Back to Challenge

</a>

</div>

</body>

</html>