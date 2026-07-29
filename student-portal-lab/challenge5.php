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

pre{
    background:#f1f1f1;
    padding:15px;
    border-radius:5px;
    overflow:auto;
}

code{
    color:#c7254e;
}

</style>

</head>

<body>

<div class="container">

<h1>Challenge 5 - Secure Coding Review</h1>

<h2>Scenario</h2>

<p>
A developer has submitted a login module for the Student Management Portal. Before deploying the application, the security team has asked you to review the source code and identify security weaknesses.
</p>

<div class="info">
<strong>Difficulty:</strong> Medium
<br><br>
<strong>Expected Time:</strong> 20 Minutes
</div>

<h2>Objective</h2>

<p>
Analyze the following PHP code and identify the security vulnerabilities. Explain why they are dangerous and recommend secure coding practices to fix them.
</p>

<h2>Code Under Review</h2>

<pre><code>
&lt;?php

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users
WHERE username='$username'
AND password='$password'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)&gt;0){

    $_SESSION['username']=$username;

    header("Location: dashboard.php");

}

?&gt;
</code></pre>

<h2>Tasks</h2>

<ol>

<li>Identify at least <strong>three</strong> security weaknesses in the code.</li>

<li>Explain the impact of each weakness.</li>

<li>Describe how an attacker could misuse the vulnerable login logic.</li>

<li>Recommend secure coding improvements.</li>

<li>Compare this code with the secure <code>login.php</code> used in the Student Management Portal.</li>

</ol>

<h2>Questions</h2>

<ol>

<li>Why is building SQL queries using user input dangerous?</li>

<li>Why should passwords never be stored or compared in plain text?</li>

<li>Why are prepared statements more secure?</li>

<li>How should sessions be managed after a successful login?</li>

<li>What additional security controls would you implement before deploying this application?</li>

</ol>

<h2>Expected Findings</h2>

<ul>

<li>Unsafe SQL query construction.</li>

<li>No prepared statements.</li>

<li>Plain-text password comparison.</li>

<li>No password hashing.</li>

<li>No input validation.</li>

<li>No session regeneration after login.</li>

<li>No account lockout or brute-force protection.</li>

</ul>

<h2>Hint</h2>

<p>
Review the secure <code>login.php</code> that you created earlier in this lab. Compare how user input is processed, how database queries are executed, and how user sessions are handled.
</p>

<a class="btn" href="dashboard.php">
Return to Dashboard
</a>

</div>

</body>

</html>