# user-status-app


A simple web application built with **PHP** and **MySQL** to manage user data and toggle their status.

---

##  Project Overview

**User Status App** is a lightweight system that allows administrators to:

- Add new users with name and age
- Display all users in a table
- Toggle user status between **Active (1)** and **Inactive (0)**

---

##  Technologies Used

- **PHP** – Server-side scripting
- **HTML** – Markup language for structuring content
- **CSS** – Styling and layout
- **MySQL** – Relational database for storing user data
- **XAMPP** – Local server environment used to run the project

---

##  How It Works

### 1. `index.php`
- Displays a form to add a new user
- Shows a table of all users from the database
- Each row includes a "Toggle" button to switch the user status

### 2. `insert.php`
- Handles form submission
- Inserts a new user into the `user` table with a default status of **1** (active)

### 3. `toggle.php`
- Receives a user ID via `GET`
- Fetches the current status from the database
- Toggles it: if it's `1`, it becomes `0`, and vice versa
- Redirects back to the main page

### 4. `style.css`
- Adds basic styling to enhance layout and usability

---

##  Database Structure

- **Database Name:** `info`
- **Table Name:** `user`

### `user` Table Schema:

| Column Name | Type | Description |
|-------------|-----------|------------------------------|
| id | INT | Primary Key, Auto Increment |
| name | VARCHAR | User's name |
| age | INT | User's age |
| status | TINYINT | 1 = Active, 0 = Inactive |

## Table in webpage:
<img width="2228" height="587" alt="Screenshot 2025-07-12 001421" src="https://github.com/user-attachments/assets/863334b9-536f-4bf9-9673-efdb1a315a06" />

## when insert record:
<img width="2236" height="654" alt="Screenshot 2025-07-12 001448" src="https://github.com/user-attachments/assets/0816c951-31df-4492-a17b-754746c6f109" />
## display a new record in table:
<img width="2239" height="590" alt="Screenshot 2025-07-12 001501" src="https://github.com/user-attachments/assets/951f3f3c-9676-420a-8254-53462f31bc40" />
## before we  press toggle to update the status on first record (john):
<img width="2239" height="590" alt="Screenshot 2025-07-12 001501" src="https://github.com/user-attachments/assets/2deb9a4a-9266-4f48-94b2-cb5599a34c2b" />
## the status of  john record is uppdated:
<img width="2239" height="720" alt="Screenshot 2025-07-12 001651" src="https://github.com/user-attachments/assets/e8f36f8b-1796-48b8-8918-250b97bb8d1f" />








---
