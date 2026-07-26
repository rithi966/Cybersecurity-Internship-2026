<!DOCTYPE html>
<html>

<head>

<title>Challenge 2 - Authentication Analysis</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    width:800px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

code{
    background:#eee;
    padding:3px 6px;
}

.btn{
    display:inline-block;
    padding:10px 20px;
    background:#007bff;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.info{
    background:#f8f9fa;
    border-left:5px solid #007bff;
    padding:10px;
    margin:15px 0;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="container">

<h1>Challenge 2 - Authentication Analysis</h1>

<h2>Objective</h2>

<p>
Understand how the Student Management Portal performs user authentication and identify the key components involved in the login process.
</p>

<div class="info">
    <strong>Difficulty:</strong> Easy<br><br>
    <strong>Expected Time:</strong> 15 Minutes
</div>

<h2>Task</h2>

<ul>
    <li>Open the login page.</li>
    <li>Enter valid credentials.</li>
    <li>Observe what happens after login.</li>
    <li>Identify which information is checked during authentication.</li>
</ul>

<h2>Questions</h2>

<ol>
    <li>What page is displayed after a successful login?</li>
    <li>What database table stores the user credentials?</li>
    <li>Which session variables are created after login?</li>
</ol>

<h2>Hint</h2>

<p>
Review the PHP login code and observe how session variables are created after successful authentication.
</p>

<br>

<a class="btn" href="dashboard.php">Return to Dashboard</a>

</div>

</body>

</html>