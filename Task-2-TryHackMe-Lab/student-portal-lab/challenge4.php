<!DOCTYPE html>
<html>

<head>

<title>Challenge 4 - Authorization</title>

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

.btn{
    display:inline-block;
    padding:10px 20px;
    background:#007bff;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-top:15px;
    margin-right:10px;
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

<h1>Challenge 4 - Authorization</h1>

<h2>Objective</h2>

<p>
Understand how access control protects sensitive information after authentication.
</p>

<div class="info">
    <strong>Difficulty:</strong> Medium<br><br>
    <strong>Expected Time:</strong> 20 Minutes
</div>

<h2>Tasks</h2>

<ul>

<li>Login to the Student Portal.</li>

<li>Access the protected student information page.</li>

<li>Observe how the system checks user sessions before allowing access.</li>

<li>Understand why authorization is important for protecting sensitive information.</li>

</ul>

<h2>Questions</h2>

<ol>

<li>What is the difference between authentication and authorization?</li>

<li>Why should protected pages verify a user's session?</li>

<li>What could happen if authorization checks are missing?</li>

</ol>

<h2>Learning Points</h2>

<ul>

<li>Authentication verifies a user's identity.</li>

<li>Authorization determines what resources a user can access.</li>

<li>Sessions help maintain a user's authenticated state.</li>

<li>Sensitive pages should only be accessible to authorized users.</li>

</ul>

<h2>Hint</h2>

<p>
Review the PHP session validation used in the protected page and identify how unauthorized users are prevented from accessing sensitive information.
</p>

<a class="btn" href="students.php">
View Protected Student Information
</a>

<a class="btn" href="dashboard.php">
Return to Dashboard
</a>

</div>

</body>

</html>