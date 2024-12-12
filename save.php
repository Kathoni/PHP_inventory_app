<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Item saved successfully!</p>";
        header("Location: index.php");
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="form-container">
    <h2>Save Item</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Item Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <button type="submit">Save</button>
    </form>
</div>
