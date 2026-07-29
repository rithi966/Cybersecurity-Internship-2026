<!DOCTYPE html>
<html>

<head>

<title>Challenge 4 - Broken Access Control</title>

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

<h1>Challenge 4 - Broken Access Control</h1>

<h2>Scenario</h2>

<p>
During a security assessment of the Student Management Portal, you discover that student records are retrieved using an ID in the URL. Your task is to determine whether users can access records that do not belong to them.
</p>

<div class="info">

<strong>Difficulty:</strong> Intermediate

<br><br>

<strong>Expected Time:</strong> 20 Minutes

</div>

<h2>Objective</h2>

<ul>

<li>Access the Student Profile page.</li>

<li>Observe how records are loaded.</li>

<li>Determine whether unauthorized records can be viewed.</li>

<li>Identify the vulnerability.</li>

<li>Suggest a secure solution.</li>

</ul>

<h2>Questions</h2>

<ol>

<li>What vulnerability exists?</li>

<li>Which URL parameter is vulnerable?</li>

<li>What information can an attacker access?</li>

<li>How can this vulnerability be prevented?</li>

</ol>

<h2>Hint</h2>

<p>

Pay attention to the URL after opening the profile page.

</p>

<br>

<a class="btn" href="view_student.php?id=1">

Launch Challenge

</a>

&nbsp;

<a class="btn" href="dashboard.php">

Return to Dashboard

</a>

</div>

</body>

</html>