# Final Report

# Design of Student Portal Cyber Security Lab


## 1. Introduction

The Student Portal Cyber Security Lab is a TryHackMe-style web security training environment designed to provide practical experience in identifying and understanding common web application security issues.

The lab focuses on authentication security, SQL Injection prevention, authorization, and secure coding practices.

The objective is to create a realistic learning environment where participants analyze vulnerabilities and understand defensive solutions.


---

# 2. Lesson Objectives

The main objectives of this lesson are:

- Understand how web authentication systems work.
- Learn the difference between authentication and authorization.
- Understand SQL Injection vulnerabilities.
- Learn how prepared statements prevent SQL Injection.
- Analyze secure and insecure coding approaches.
- Develop practical web application security skills.


---

# 3. Lab Design Process


## Topic Selection

The topic was selected based on the importance of web application security in real-world environments.

Authentication and SQL Injection were chosen because they are common security issues affecting web applications.


## Environment Design

A vulnerable student portal application was created using:

- PHP
- MySQL
- HTML
- Bootstrap
- XAMPP


The application simulates a real web portal containing:

- User login
- Dashboard
- Protected student information
- Secure authentication implementation


## Challenge Development

The lab was divided into multiple challenges to gradually increase difficulty.


Challenge progression:

1. Introduction to application structure
2. Authentication analysis
3. Secure authentication comparison
4. Authorization and access control
5. Secure coding review


---

# 4. Challenge Description


## Challenge 1 - Introduction

Purpose:

Introduce learners to the application environment.

Skills developed:

- Application analysis
- Understanding web application workflow


---

## Challenge 2 - Authentication Analysis

Purpose:

Teach learners how authentication works.

Skills developed:

- Login workflow analysis
- Session understanding
- Database authentication concepts


---

## Challenge 3 - Secure Authentication

Purpose:

Demonstrate SQL Injection risks and secure implementation.

Skills developed:

- Understanding insecure queries
- Prepared statements
- Parameterized queries


---

## Challenge 4 - Authorization and Access Control

Purpose:

Teach protection of sensitive resources.

Skills developed:

- Session validation
- Access control concepts
- Resource protection


---

## Challenge 5 - Secure Coding Review

Purpose:

Review security improvements.

Skills developed:

- Secure development practices
- Defensive programming concepts


---

# 5. Practical Learning Approach

The lab encourages learners to analyze problems instead of following simple instructions.

Participants must:

- Observe application behavior
- Understand authentication flow
- Compare different implementations
- Identify security improvements
- Explain why defensive techniques work


This approach improves problem-solving skills and security thinking.


---

# 6. Testing and Refinement

The lab was tested to ensure:

- Database connectivity works correctly.
- Login functionality operates properly.
- Protected pages require authentication.
- Secure authentication implementation works.
- Challenge navigation functions correctly.


Improvements made:

- Added structured challenges.
- Added hints and solutions.
- Improved user interface.
- Created complete documentation.


---

# 7. Expected Learning Outcomes

After completing this lab, learners should be able to:

- Explain authentication mechanisms.
- Understand SQL Injection vulnerabilities.
- Describe how prepared statements improve security.
- Explain authorization concepts.
- Apply secure coding practices.
- Analyze web application security weaknesses.


---

# 8. How This Lab Challenges Learners

The lab challenges participants by requiring them to:

- Investigate application behavior.
- Understand security weaknesses.
- Compare vulnerable and secure approaches.
- Think about defensive solutions.
- Apply cybersecurity concepts practically.


The challenges are designed to be accessible for learners with basic cybersecurity knowledge while still requiring analysis and problem-solving.


---

# 9. Future Improvements

Possible future enhancements:

- Add role-based access control.
- Add logging and monitoring.
- Include more web vulnerabilities.
- Add security testing exercises using tools such as Burp Suite.
- Expand the lab with privilege escalation scenarios.


---

# 10. Limitations

This lab is designed for educational purposes and is intended to run in a controlled local environment.

The project focuses on teaching secure authentication, authorization, and secure coding concepts. It does not simulate a full production environment or include advanced infrastructure components.

Future versions of the lab may include additional web security topics, role-based access control, logging, monitoring, and more complex cybersecurity scenarios.

---
# Conclusion

The Student Portal Cyber Security Lab provides a structured hands-on learning experience focused on web application security.

Through practical challenges, learners gain experience understanding vulnerabilities, analyzing security issues, and applying secure development techniques.