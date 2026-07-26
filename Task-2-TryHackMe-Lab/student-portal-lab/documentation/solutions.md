# Student Portal Cyber Security Lab - Solutions Guide

## Challenge 1 - Introduction

### Objective
Understand the application structure and workflow.

### Solution

The learner should explore:

- Login functionality
- Dashboard navigation
- Available challenge pages
- Application components

Learning point:

Understanding application flow helps identify security weaknesses.

---

# Challenge 2 - Authentication Analysis

### Objective
Understand how user authentication works.

### Solution

Authentication verifies user credentials before allowing access.

The process:

1. User enters username and password.
2. Application checks credentials against the database.
3. If valid, a session is created.
4. User is redirected to the dashboard.

Important concepts:

- Database authentication
- Session management
- Credential verification

---

# Challenge 3 - Secure Authentication

### Objective
Understand SQL Injection risks and prevention.

### Solution

The insecure implementation directly uses user input in SQL queries.

Security issue:

- User input can affect the SQL statement.
- This may allow unauthorized database actions.

The secure implementation uses:

- Prepared statements
- Parameterized queries

Benefits:

- SQL commands are separated from user input.
- Database queries become safer.

---

# Challenge 4 - Authorization and Access Control

### Objective
Understand protecting sensitive resources.

### Solution

Authentication confirms identity.

Authorization decides what the user can access.

The student information page is protected by checking:

- Active login session
- User authentication status

Security practice:

Restricted pages should always verify access permissions.

---

# Challenge 5 - Secure Coding Review

### Objective
Review security improvements.

### Solution

Implemented security improvements:

- Prepared statements
- Session validation
- Input checking
- Secure authentication practices
- Access control

Final learning outcome:

Secure applications require both prevention and proper design practices.