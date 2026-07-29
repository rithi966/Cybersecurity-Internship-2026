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

<h2>Scenario</h2>

<p>
During a security assessment of the Student Management Portal, you discover an old login page that developers used for testing. It is still accessible on the server and may contain security weaknesses.
</p>

<div class="info">
<strong>Difficulty:</strong> Intermediate<br><br>
<strong>Expected Time:</strong> 25 Minutes
</div>

<h2>Objective</h2>

<p>
Analyze the authentication mechanism of the test login page and determine whether it is vulnerable to SQL Injection.
</p>

<h2>Challenge Tasks</h2>

<ul>
<li>Open the vulnerable login page.</li>
<li>Test the login form using different inputs.</li>
<li>Determine whether authentication can be bypassed.</li>
<li>Gain access without knowing a valid password.</li>
<li>Identify the vulnerability.</li>
<li>Recommend a secure solution.</li>
</ul>

<h2>Rules</h2>

<ul>
<li>Test only the vulnerable login page provided for this challenge.</li>
<li>Do not modify the application source code.</li>
<li>Document the payload that successfully bypasses authentication.</li>
</ul>

<h2>Questions</h2>

<ol>
<li>What vulnerability exists in the login page?</li>
<li>Why does the authentication bypass work?</li>
<li>Which SQL query is likely executed by the application?</li>
<li>How can this vulnerability be prevented?</li>
</ol>

<h2>Hint</h2>

<p>
Observe how the application handles user input before it is sent to the database. Think about what happens if special SQL characters are entered into the username field.
</p>

<br>

<a class="btn" href="login_challenge.php">
Launch Challenge
</a>

&nbsp;&nbsp;

<a class="btn" href="dashboard.php">
Return to Dashboard
</a>

</div>

</body>

</html>