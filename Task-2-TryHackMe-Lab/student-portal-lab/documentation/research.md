# Research Report - Web Application Security


# 1. Introduction

Web applications are commonly targeted by attackers because they handle sensitive information such as user accounts, personal data, and business information.

This lab focuses on important web security concepts:

- Authentication security
- SQL Injection prevention
- Authorization and access control
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

# 4. Prepared Statements

## What are Prepared Statements?

Prepared statements are a secure method of executing SQL queries.

They separate:

- SQL instructions
- User-provided data


## Advantages

Prepared statements:

- Reduce SQL Injection risk
- Improve database security
- Make queries safer


Example concept:

Unsafe approach:

User input becomes part of the SQL command.


Secure approach:

User input is treated only as data.


---

# 5. Authorization and Access Control

## What is Authorization?

Authorization determines what actions or resources a user can access after authentication.


Example:

A normal student may view their information, while an administrator may manage users.


## Importance of Authorization

Without proper authorization:

- Users may access restricted information
- Sensitive data may be exposed
- Privilege abuse can occur


## Security Practices

- Verify user permissions
- Protect sensitive pages
- Apply least privilege principles


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
- Understand common web vulnerabilities
- Compare insecure and secure implementations
- Learn defensive security techniques


---

# 8. Expected Skills After Completion

After completing this lab, learners should understand:

- How web authentication works
- How SQL Injection vulnerabilities occur
- How prepared statements prevent attacks
- How authorization protects resources
- How secure coding improves application security