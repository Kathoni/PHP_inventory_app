<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM items WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Item deleted successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="form-container">
    <h2>Delete Item</h2>
    <form method="get">
        <input type="number" name="id" placeholder="Item ID" required>
        <button type="submit">Delete</button>
        <a href="index.php" class="button">Exit</a>
    </form>
</div>
