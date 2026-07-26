# Student Portal Cyber Security Lab - Hints Guide


# Challenge 1 - Introduction

## Hint

Explore the application pages and understand the normal user flow.

Think about:

- Which pages are public?
- Which pages require login?
- How does the user move through the application?


---

# Challenge 2 - Authentication Analysis

## Hint

Analyze the login process.

Look for:

- Where username and password are received
- Where credentials are checked
- How the application remembers a logged-in user


---

# Challenge 3 - Secure Authentication

## Hint

Compare the two login implementations.

Focus on:

- How SQL queries are created
- How user input is handled
- Difference between normal SQL queries and prepared statements


---

# Challenge 4 - Authorization and Access Control

## Hint

Try accessing protected pages without logging in.

Observe:

- What happens when no session exists?
- How does the application decide whether access is allowed?


---

# Challenge 5 - Secure Coding Review

## Hint

Review all security improvements added throughout the lab.

Consider:

- Database security
- User input handling
- Session protection
- Access control