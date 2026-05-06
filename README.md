# Basic CRUD Application (Library Management System)

A simple **PHP + MySQL** CRUD project for managing a small library book list. You can **add**, **view**, **edit**, and **delete** books using a basic web UI.

## Features
- Add new books (title, author, genre, description)
- View all books in a table
- View full book details (read more)
- Edit existing book details
- Delete a book

## Tech Stack
- **PHP** (mysqli)
- **MySQL**

## Project Files (What each file does)
- `connect.php` — Creates the MySQL database connection.
- `index.php` — Home page: lists all books from `data_library` table and provides actions (View / Edit / Delete).
- `main.php` — Form UI to add a new book.
- `process.php` — Handles **Create** and **Update** form submissions.
- `view.php` — Displays details of a single book by `id`.
- `edit.php` — Edit form for an existing book (loads book data by `id`).
- `delete.php` — Deletes a book by `id`.

## Database Setup

1. Create a database named:
   - `library`

2. Create a table named:
   - `data_library`

Example schema (you can adjust types if you want):
```sql
CREATE TABLE data_library (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  genre VARCHAR(100) NOT NULL,
  description TEXT NOT NULL
);
```

## Configure Database Connection
Update `connect.php` if your MySQL settings differ:

- Host: `localhost`
- User: `root`
- Password: *(empty by default)*
- Database: `library`
- Port: `4306` (important — change if your MySQL runs on 3306)

## How to Run (Local)
1. Install **XAMPP/WAMP/MAMP** (or any PHP + MySQL setup).
2. Put this project folder in your server root (example for XAMPP: `htdocs/Basic-CRUD-Application`).
3. Start **Apache** and **MySQL**.
4. Create the database + table (see above).
5. Open in browser:
   - `http://localhost/Basic-CRUD-Application/index.php`

## Notes
- This is a beginner-friendly CRUD project meant for learning.
- Input is escaped using `mysqli_real_escape_string`, but it’s still recommended to use **prepared statements** for better security in real projects.

## License
This project is licensed under the terms of the **MIT License** (see `LICENSE`).
