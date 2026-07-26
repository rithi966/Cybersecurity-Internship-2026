<!DOCTYPE html>
<html>

<head>

<title>Challenge 3 - Secure Authentication</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    width:850px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}

.btn{
    display:inline-block;
    padding:12px 20px;
    background:#0d6efd;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-top:15px;
    margin-right:10px;
}

.info{
    background:#f8f9fa;
    border-left:5px solid #0d6efd;
    padding:10px;
    margin:15px 0;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="container">

<h1>Challenge 3 - Secure Authentication</h1>

<h2>Objective</h2>

<p>
Compare two authentication implementations and understand why prepared statements provide stronger protection against SQL Injection.
</p>

<div class="info">
    <strong>Difficulty:</strong> Medium<br><br>
    <strong>Expected Time:</strong> 25 Minutes
</div>

<h2>Your Tasks</h2>

<ol>

    <li>Review the original login implementation.</li>

    <li>Review the secure login implementation.</li>

    <li>Identify the differences between the two approaches.</li>

    <li>Explain why prepared statements are recommended for database queries.</li>

</ol>

<h2>Questions</h2>

<ol>

    <li>What is the main difference between the original and secure login pages?</li>

    <li>Why are prepared statements considered more secure?</li>

    <li>Name two additional secure coding practices that improve authentication security.</li>

</ol>

<h2>Learning Outcome</h2>

<p>
By the end of this challenge, learners should be able to explain how parameterized queries reduce SQL Injection risk, compare secure and insecure authentication methods, and describe additional secure coding practices.
</p>

<h2>Hint</h2>

<p>
Compare how user input is handled in both login implementations and identify how the secure version separates SQL instructions from user-provided data.
</p>

<a class="btn" href="login.php">Open Original Login</a>

<a class="btn" href="login_secure.php">Open Secure Login</a>

<br><br>

<a class="btn" href="dashboard.php">Return to Dashboard</a>

</div>

</body>

</html>