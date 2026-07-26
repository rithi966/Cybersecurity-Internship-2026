<!DOCTYPE html>
<html>

<head>

<title>Challenge 5 - Secure Coding Review</title>

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
    box-shadow:0 0 10px gray;
}

.btn{
    display:inline-block;
    padding:12px 20px;
    background:#007bff;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-top:15px;
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

<h1>Challenge 5 - Secure Coding Review</h1>

<h2>Objective</h2>

<p>
Review the security improvements implemented in the Student Management Portal and understand how secure coding practices help protect web applications.
</p>

<div class="info">
    <strong>Difficulty:</strong> Medium<br><br>
    <strong>Expected Time:</strong> 15 Minutes
</div>

<h2>Tasks</h2>

<ol>

<li>Identify the security issues in the original application.</li>

<li>Compare the original login implementation with the secure login implementation.</li>

<li>Explain why prepared statements improve database security.</li>

<li>Review how session validation and authorization protect sensitive pages.</li>

</ol>

<h2>Security Improvements</h2>

<ul>

<li>Prepared statements help reduce SQL Injection risk.</li>

<li>Sessions protect authenticated pages from unauthorized access.</li>

<li>Authorization controls which users can access protected resources.</li>

<li>Password hashing provides stronger protection for stored credentials.</li>

<li>Input validation improves the overall security of the application.</li>

</ul>

<h2>Final Questions</h2>

<ol>

<li>What is the difference between authentication and authorization?</li>

<li>Why are prepared statements safer than normal SQL queries?</li>

<li>Why should passwords never be stored as plain text?</li>

<li>Why should protected pages verify user sessions before granting access?</li>

</ol>

<h2>Hint</h2>

<p>
Review the secure login implementation and compare it with the original version. Focus on how user input is processed, how sessions are managed, and how access to protected pages is controlled.
</p>

<a class="btn" href="dashboard.php">
Return to Dashboard
</a>

</div>

</body>

</html>