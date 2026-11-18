# Group 33: Student Records Web App (PHP + MySQL)

> **University project**: Year 3 group coursework (Group 33), Birmingham City University
> **Dates:** March 2026 (Deliverable 1) to May 2026 (Deliverable 2). This code was last changed in April 2026.
> **Note:** This was a **group project**. This repository holds my working copy of the app.

A small PHP/MySQL web app, run locally under XAMPP, that lists student records and adds new ones through a form.

| File | Purpose |
|---|---|
| `db_connect.php` | MySQL connection (local XAMPP defaults; no real credentials) |
| `index.php` | Lists students from the `group33_students` database |
| `add_student.php` | Form handler that inserts a new student |

## Run

1. Install XAMPP and start Apache and MySQL.
2. Create a database called `group33_students`.
3. Copy these files into `htdocs/group33_app/` and open http://localhost/group33_app/.
