# Student Portal Cyber Security Lab - Testing Report


# 1. Testing Objective

The purpose of testing was to verify that the lab functions correctly and provides a stable learning environment.

Testing was performed on:

- Application functionality
- Database connection
- Authentication
- Authorization
- Challenge navigation
- Secure implementation


---

# 2. Environment Tested

## Software

- XAMPP Server
- Apache
- MySQL
- PHP
- Web Browser


## Application

Student Portal Cyber Security Lab


---

# 3. Functional Testing


## Test 1: Database Connection

### Procedure

Started MySQL service and accessed the application.

### Expected Result

Application should connect successfully to the database.

### Result

Successful.


---

## Test 2: User Login

### Procedure

Entered valid username and password.

### Expected Result

User should be authenticated and redirected to dashboard.

### Result

Successful.


---

## Test 3: Invalid Login

### Procedure

Entered incorrect credentials.

### Expected Result

Application should reject invalid login attempts.

### Result

Successful.


---

## Test 4: Session Protection

### Procedure

Attempted to access protected pages without logging in.

### Expected Result

User should be redirected to the login page.

### Result

Successful.


---

## Test 5: Secure Login Implementation

### Procedure

Tested login using the secure authentication page.

### Expected Result

Authentication should work using prepared statements.

### Result

Successful.


---

# 4. Challenge Testing


## Challenge 1

Verified:

- Application navigation
- Lab introduction page

Status:

Completed successfully.


---

## Challenge 2

Verified:

- Authentication explanation
- Login workflow understanding

Status:

Completed successfully.


---

## Challenge 3

Verified:

- Secure login comparison
- Prepared statement implementation

Status:

Completed successfully.


---

## Challenge 4

Verified:

- Protected student information page
- Session validation

Status:

Completed successfully.


---

## Challenge 5

Verified:

- Secure coding review content
- Learning objectives

Status:

Completed successfully.


---

# 5. Refinement Process

The lab was improved by:

- Adding multiple learning challenges
- Separating vulnerable and secure implementations
- Adding hints instead of direct answers
- Improving user interface
- Adding documentation


---

# 6. Final Testing Result

All major components were tested successfully.

The lab provides:

- A working practice environment
- Security-focused challenges
- Secure coding demonstrations
- Practical web security learning experience