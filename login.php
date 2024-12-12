<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            header("Location: index.php");
            exit;
        } else {
            echo "<p>Invalid credentials.</p>";
        }
    } else {
        echo "<p>User not found.</p>";
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="form-container">
    <h2>Login</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Signup</a></p>
</div>
