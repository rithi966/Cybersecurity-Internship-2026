# Research Report - Web Application Security


# 1. Introduction

Web applications are commonly targeted by attackers because they handle sensitive information such as user accounts, personal data, and business information.

This lab focuses on important web security concepts:

- Authentication security
- SQL Injection prevention
- Broken Access Control (IDOR)
- Secure coding practices


---

# 2. SQL Injection

## What is SQL Injection?

SQL Injection is a web application vulnerability where an attacker can manipulate database queries by providing specially crafted input.

It occurs when an application directly places user input into SQL queries without proper protection.


## Why SQL Injection Happens

Common causes:

- Directly using user input in SQL statements
- Lack of input validation
- Poor database security practices


## Impact of SQL Injection

A successful SQL Injection attack may allow attackers to:

- Access unauthorized data
- Modify database records
- Bypass authentication
- Damage application data


---

# 3. Authentication Vulnerabilities

## What is Authentication?

Authentication is the process of verifying the identity of a user.

Example:

A user provides:

- Username
- Password

The application checks whether the credentials are correct.


## Common Authentication Issues

Examples:

- Weak passwords
- Improper password storage
- Poor session management
- Insecure login logic


## Secure Authentication Practices

Recommended methods:

- Store passwords using hashing algorithms
- Use strong password policies
- Implement secure session handling
- Limit failed login attempts


---

# 4. Broken Access Control (IDOR)

## What is Broken Access Control?

Broken Access Control occurs when an application fails to properly verify whether a user is authorized to access a requested resource.

One common example is **Insecure Direct Object Reference (IDOR)**, where users can access another user's data by modifying identifiers such as record IDs in the URL.


## Why Broken Access Control Happens

Common causes:

- Missing authorization checks
- Trusting user-controlled URL parameters
- Failure to verify resource ownership
- Improper permission validation


## Impact of Broken Access Control

A successful attack may allow users to:

- View another user's information
- Access restricted resources
- Modify unauthorized records
- Expose sensitive data


## Security Practices

- Verify user permissions before every request
- Validate ownership of requested resources
- Apply the principle of least privilege
- Never trust client-supplied identifiers alone


---

# 5. Secure Coding Review

## What is Secure Coding Review?

Secure coding review is the process of examining application source code to identify security weaknesses before deployment.

It helps developers detect vulnerabilities early and improve the overall security of the application.


## Common Security Issues Found During Code Review

Examples include:

- Dynamic SQL queries
- Missing prepared statements
- Plain-text password handling
- Missing input validation
- Weak session management
- Insufficient authorization checks


## Benefits of Secure Code Review

A secure code review helps developers:

- Identify security weaknesses early
- Improve application security
- Reduce common web vulnerabilities
- Follow secure development best practices


---

# 6. Secure Coding Practices

Important secure development practices:

## Input Validation

Check and verify user-provided information before processing it.


## Password Security

Passwords should never be stored as plain text.

Use:

- Password hashing
- Secure storage methods


## Database Security

Use:

- Prepared statements
- Restricted database permissions
- Secure configuration


## Session Security

Protect sessions by:

- Checking authentication status
- Avoiding unnecessary session exposure
- Logging out inactive users


---

# 7. Learning Purpose of This Lab

This lab provides practical experience by allowing learners to:

- Analyze authentication workflows
- Identify SQL Injection vulnerabilities
- Analyze Broken Access Control (IDOR) vulnerabilities
- Review insecure PHP code and identify security weaknesses
- Compare insecure and secure implementations
- Learn defensive security techniques


---

# 8. Expected Skills After Completion

After completing this lab, learners should understand:

- How web authentication works
- How SQL Injection vulnerabilities occur
- How prepared statements prevent SQL Injection
- How Broken Access Control (IDOR) exposes sensitive resources
- How secure coding reviews identify common security weaknesses
- How secure coding improves application security