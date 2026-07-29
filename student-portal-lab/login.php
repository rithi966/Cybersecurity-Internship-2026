<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "includes/config.php";

session_start();

if(isset($_POST['login'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){

        $row = $result->fetch_assoc();

        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        header("Location: dashboard.php");
        exit();

    }else{

        $error = "Invalid Username or Password.";

    }

    $stmt->close();

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Student Management Portal Login</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{

    width:450px;
    margin:60px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px gray;

}

h2{

    text-align:center;
    color:#333;

}

.info{

    background:#f8f9fa;
    border-left:5px solid #007bff;
    padding:10px;
    margin:15px 0;
    border-radius:5px;

}

label{

    font-weight:bold;

}

input{

    width:95%;
    padding:10px;
    margin:8px 0 15px;
    border:1px solid #ccc;
    border-radius:5px;

}

.btn{

    width:100%;
    padding:12px;
    background:#007bff;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;

}

.btn:hover{

    background:#0056b3;

}

.error{

    background:#f8d7da;
    color:#721c24;
    padding:10px;
    border-radius:5px;
    margin-bottom:15px;

}

</style>

</head>

<body>

<div class="container">

<h2>
Student Management Portal
</h2>

<div class="info">
Please log in to access the Student Management Portal and cybersecurity lab challenges.
</div>

<?php

if(isset($error)){

    echo "<div class='error'>$error</div>";

}

?>

<form method="POST">

<label>
Username
</label>

<input
type="text"
name="username"
placeholder="Enter username"
required>

<label>
Password
</label>

<input
type="password"
name="password"
placeholder="Enter password"
required>

<button class="btn" type="submit" name="login">
Login
</button>

</form>

</div>

</body>

</html>