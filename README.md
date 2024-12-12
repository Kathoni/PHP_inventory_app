# PHP Inventory App

This is a simple inventory management app built with PHP, using a MySQL database (XAMPP environment). The app allows multiple users to manage inventory items. It is designed to be used by organizations where company members can access and manage the inventory.

## Database Structure

The database is named `simple_app` and consists of two main tables:

### Users Table

This table stores user information, including their email and password.

**Fields:**
- `id` (INT, Auto-increment) - Primary Key
- `email` (VARCHAR(255), Unique, Not Null) - The email address of the user.
- `password` (VARCHAR(255), Not Null) - The password for the user account.

**SQL Query to Create the `users` Table:**

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE NOT NULL,
     description TEXT NOT NULL
);

