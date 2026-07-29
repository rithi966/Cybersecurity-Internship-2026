# Final Report

# Design of Student Portal Cyber Security Lab

## 1. Introduction

The Student Portal Cyber Security Lab is a TryHackMe-style web security training environment designed to provide practical experience in identifying, analyzing, and understanding common web application security vulnerabilities.

The lab focuses on SQL Injection, secure authentication, Broken Access Control (IDOR), and secure coding practices.

The objective is to create a realistic learning environment where participants investigate vulnerabilities, understand their impact, and learn defensive security techniques through practical exercises.

---

# 2. Lesson Objectives

The main objectives of this lesson are:

- Understand how web authentication systems work.
- Learn how SQL Injection vulnerabilities occur.
- Understand how prepared statements prevent SQL Injection.
- Identify Broken Access Control (IDOR) vulnerabilities.
- Analyze insecure PHP code and recommend secure coding improvements.
- Develop practical web application security skills.

---

# 3. Lab Design Process

## Topic Selection

The topics were selected based on common web application vulnerabilities found in real-world environments.

SQL Injection, Broken Access Control (IDOR), secure authentication, and secure coding review were chosen because they represent important security concepts included in modern web application security assessments.

## Environment Design

A Student Management Portal was developed using:

- PHP
- MySQL
- HTML
- Bootstrap
- XAMPP

The application simulates a real web portal containing:

- Secure user login
- Dashboard
- Student profile management
- SQL Injection challenge
- Broken Access Control (IDOR) challenge
- Secure authentication implementation
- Secure code review exercises

## Challenge Development

The lab was divided into multiple challenges to gradually increase difficulty.

Challenge progression:

1. Introduction to the application structure
2. SQL Injection Authentication Bypass
3. Secure Authentication
4. Broken Access Control (IDOR)
5. Secure Coding Review

---

# 4. Challenge Description

## Challenge 1 - Introduction

### Purpose

Introduce learners to the application environment.

### Skills Developed

- Application analysis
- Understanding application workflow
- Navigation of the lab environment

---

## Challenge 2 - SQL Injection Authentication Bypass

### Purpose

Teach learners how insecure SQL queries can allow authentication bypass.

### Skills Developed

- Identifying SQL Injection vulnerabilities
- Understanding insecure authentication logic
- Learning why prepared statements are necessary
- Analyzing vulnerable login implementations

---

## Challenge 3 - Secure Authentication

### Purpose

Demonstrate how secure authentication mechanisms protect web applications against SQL Injection attacks.

### Skills Developed

- Prepared statements
- Parameterized queries
- Secure session handling
- Secure authentication design

---

## Challenge 4 - Broken Access Control (IDOR)

### Purpose

Teach learners how missing authorization checks can expose sensitive information.

### Skills Developed

- Identifying IDOR vulnerabilities
- Understanding authorization concepts
- Resource ownership validation
- Secure access control practices

---

## Challenge 5 - Secure Coding Review

### Purpose

Teach learners to review PHP source code and identify common security weaknesses before deployment.

### Skills Developed

- Secure code review
- Identifying insecure coding practices
- Comparing vulnerable and secure implementations
- Recommending secure coding improvements

---

# 5. Practical Learning Approach

The lab encourages learners to analyze problems instead of following simple instructions.

Participants must:

- Observe application behavior.
- Analyze vulnerable authentication mechanisms.
- Investigate Broken Access Control vulnerabilities.
- Compare vulnerable and secure implementations.
- Review PHP source code.
- Recommend secure coding improvements.
- Explain why defensive techniques improve application security.

This approach develops analytical thinking, secure coding awareness, and practical web security skills.

---

# 6. Testing and Refinement

The lab was tested to ensure:

- Database connectivity functions correctly.
- Secure login operates successfully.
- SQL Injection challenge behaves as expected.
- Broken Access Control (IDOR) challenge functions correctly.
- Protected pages require authentication.
- Challenge navigation works properly.
- Secure authentication implementation functions correctly.

Improvements made:

- Added structured learning challenges.
- Improved challenge descriptions.
- Added hints and solutions.
- Enhanced the user interface.
- Improved documentation.
- Added secure coding review exercises.

---

# 7. Expected Learning Outcomes

After completing this lab, learners should be able to:

- Explain web authentication mechanisms.
- Understand SQL Injection vulnerabilities.
- Explain how prepared statements prevent SQL Injection.
- Identify Broken Access Control (IDOR) vulnerabilities.
- Review insecure PHP code and identify security weaknesses.
- Recommend secure coding improvements.
- Apply secure authentication and authorization principles.

---

# 8. How This Lab Challenges Learners

The lab challenges participants by requiring them to:

- Analyze application behavior.
- Investigate SQL Injection vulnerabilities.
- Discover Broken Access Control (IDOR) weaknesses.
- Compare insecure and secure authentication implementations.
- Review PHP source code for security issues.
- Recommend defensive security improvements.
- Apply cybersecurity concepts to realistic scenarios.

The challenges are designed to be accessible for learners with a basic understanding of cybersecurity while encouraging critical thinking and practical problem-solving.

---

# 9. Future Improvements

Possible future enhancements:

- Implement role-based access control (RBAC).
- Add activity logging and security monitoring.
- Include additional OWASP Top 10 web vulnerabilities.
- Add defensive security exercises using Burp Suite.
- Expand secure coding review scenarios.
- Introduce API security challenges.

---

# 10. Limitations

This lab is designed for educational purposes and is intended to run in a controlled local environment.

The project focuses on teaching SQL Injection awareness, secure authentication, Broken Access Control (IDOR), and secure coding review concepts. It does not simulate a complete production environment or advanced enterprise infrastructure.

Future versions of the lab may include additional web security topics, API security, role-based access control, logging, monitoring, and more advanced cybersecurity scenarios.

---

# Conclusion

The Student Portal Cyber Security Lab provides a structured, hands-on learning experience focused on modern web application security.

Through practical challenges involving SQL Injection, secure authentication, Broken Access Control (IDOR), and secure coding review, learners gain valuable experience identifying vulnerabilities, understanding their impact, and applying secure development practices to build more secure web applications.