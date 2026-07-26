<?php

session_start();
include 'includes/config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Fetch student data
$sql = "SELECT * FROM student_details";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Student Information</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
}

.container{
    width:900px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid #ddd;
    padding:12px;
    text-align:center;
}

th{
    background:#007bff;
    color:white;
}

tr:nth-child(even){
    background:#f2f2f2;
}

.btn{
    display:inline-block;
    padding:10px 20px;
    background:#28a745;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

h1{
    text-align:center;
}

.welcome{
    text-align:center;
    font-size:18px;
    margin-bottom:20px;
}

</style>

</head>

<body>

<div class="container">

<h1>Protected Student Information</h1>

<p class="welcome">
Welcome, <strong><?php echo $_SESSION['username']; ?></strong>
</p>

<table>

<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Department</th>
    <th>Year</th>
    <th>CGPA</th>
</tr>

<?php

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['department']."</td>";
        echo "<td>".$row['year']."</td>";
        echo "<td>".$row['cgpa']."</td>";
        echo "</tr>";

    }

}else{

    echo "<tr><td colspan='5'>No student records found.</td></tr>";

}

?>

</table>

<br>

<a class="btn" href="dashboard.php">
Return to Dashboard
</a>

</div>

</body>

</html>