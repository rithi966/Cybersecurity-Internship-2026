# Student Portal Cyber Security Lab - Hints Guide


# Challenge 1 - Introduction

## Hint

Explore the application pages and understand the normal user flow.

Think about:

- Which pages are public?
- Which pages require login?
- How does the user move through the application?


---

# Challenge 2 - SQL Injection Authentication Bypass

## Hint

Carefully observe how the login page processes user input.

Think about:

- Is user input directly included in the SQL query?
- Can special SQL characters change the logic of the query?
- What happens if the application does not validate or sanitize input before querying the database?


---

# Challenge 3 - Secure Authentication

## Hint

Compare the vulnerable login page with the secure login page.

Focus on:

- How SQL queries are created
- How prepared statements protect the application
- Why parameterized queries are safer than dynamic SQL
- How secure authentication prevents SQL Injection


---

# Challenge 4 - Broken Access Control (IDOR)

## Hint

After opening the Student Profile page, carefully examine the URL.

Think about:

- Does the URL contain a record identifier?
- What happens if the identifier changes?
- Does the application verify whether you are authorized to access another user's record?


---

# Challenge 5 - Secure Coding Review

## Hint

Review the provided PHP source code carefully.

Focus on:

- How the SQL query is constructed
- How user input is processed
- How passwords are handled
- How sessions are created after login
- Compare the insecure code with the secure implementation developed earlier in the lab.