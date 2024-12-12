<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="form-container">
    <h2>Signup</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Signup</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>
