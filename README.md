PHP Inventory App
This is a simple inventory management app built with PHP, using a MySQL database (XAMPP environment). The app allows multiple users to manage inventory items. It is designed to be used by organizations where company members can access and manage the inventory.

Database Structure
The database is named simple_app and consists of two main tables:

Users Table

This table stores user information, including their email and password.
Fields:
id: (INT, Auto-increment) - Primary Key
email: (VARCHAR(255), Unique, Not Null) - The email address of the user.
password: (VARCHAR(255), Not Null) - The password for the user account.
SQL Query to Create the users Table:

sql
Copy code
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
Items Table

This table stores the inventory items, including their names and descriptions.
Fields:
id: (INT, Auto-increment) - Primary Key
name: (VARCHAR(255), Unique, Not Null) - Name of the inventory item.
description: (TEXT, Not Null) - Description of the item.
SQL Query to Create the items Table:

sql
Copy code
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL,
    description TEXT NOT NULL
);
Features
User Authentication: Users can register, log in, and manage their inventory.
Multiple User Access: Designed to allow multiple users (such as company members) to access the inventory.
Inventory Management: Users can add, delete, and search items in the inventory.
Requirements
PHP
MySQL (XAMPP or any similar local server environment)
A web browser
Setup
Clone this repository or download the source files.
Import the simple_app database into your MySQL server.
Set up the database and tables by running the SQL queries in your MySQL admin panel (like phpMyAdmin or MySQL Workbench).
Configure your database connection in the PHP files (e.g., config.php or db.php).
Usage
Start the local server (XAMPP or similar).
Open the index.php page in your browser to interact with the app.
Users can log in or sign up to access the inventory, where they can manage items.
Future Improvements
Add user roles (Admin, User) to manage access permissions.
Add more features like item categories, item search, or inventory tracking.
