# Student Portal Cyber Security Lab

## Project Description

This project is a TryHackMe-style cybersecurity learning lab.
It teaches web application security concepts using a PHP and MySQL Student Management Portal.

Learners complete practical challenges covering authentication, SQL Injection, Broken Access Control (IDOR), and secure coding review.

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- XAMPP

## Setup Instructions

1. Install XAMPP.
2. Start Apache and MySQL.
3. Place the project inside:

C:\xampp\htdocs\

4. Create the database in phpMyAdmin.
5. Import the required database tables.
6. Open:

http://localhost/student-portal-lab/

## Challenges

### Challenge 1

Introduction to the lab environment.

### Challenge 2

SQL Injection Authentication Bypass.

Analyze the vulnerable login page, identify the SQL Injection vulnerability, understand how authentication can be bypassed, and explain how prepared statements prevent the attack.

### Challenge 3

Secure Authentication.

Compare the vulnerable login implementation with the secure login implementation and understand how prepared statements, secure session handling, and input validation improve application security.

### Challenge 4

Broken Access Control (IDOR).

Analyze how student records are accessed using URL parameters, determine whether unauthorized records can be viewed, identify the Broken Access Control vulnerability, and recommend secure authorization checks.

### Challenge 5

Secure Coding Review.

Review an insecure PHP login implementation, identify multiple security weaknesses, compare it with the secure implementation used in this lab, and recommend secure coding best practices.

## Security Concepts Covered

- Authentication
- Authorization
- SQL Injection
- Prepared Statements
- Broken Access Control (IDOR)
- Session Management
- Secure Coding Review
- Secure Coding Practices

## Learning Outcomes

After completing this lab, learners will be able to:

- Understand how user authentication works in web applications.
- Explain how SQL Injection vulnerabilities occur and how they affect authentication.
- Compare vulnerable and secure login implementations.
- Understand how prepared statements help prevent SQL Injection.
- Identify Broken Access Control (IDOR) vulnerabilities.
- Review PHP source code to identify common security weaknesses.
- Recommend secure coding improvements based on industry best practices.
- Understand the importance of session management and authorization in securing web applications.