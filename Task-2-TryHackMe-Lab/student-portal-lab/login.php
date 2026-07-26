<?php
session_start();
include 'includes/config.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();

        $_SESSION['username'] = $row['username'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['role'] = $row['role'];

        header("Location: dashboard.php");
        exit();

    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management Portal</title>

    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
        }

        .container{
            width:350px;
            margin:100px auto;
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0px 0px 10px gray;
        }

        input{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
            width:100%;
            padding:10px;
            background:#007BFF;
            color:white;
            border:none;
            cursor:pointer;
        }

        h2{
            text-align:center;
        }

        .error{
            color:red;
            text-align:center;
        }
    </style>

</head>

<body>

<div class="container">

<h2>Student Management Portal</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>

</form>

<p class="error"><?php echo $message; ?></p>

</div>

</body>
</html>