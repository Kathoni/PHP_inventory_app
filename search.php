<?php
include 'db.php';
$query = isset($_GET['query']) ? $_GET['query'] : '';
?>

<link rel="stylesheet" href="style.css">
<div class="form-container">
    <h2>Search Items</h2>
    <form method="get">
        <h1>Enter item name</h>
        <input type="text" name="query" placeholder="Enter the name of the item" value="<?php echo $query; ?>">
        <button type="submit">Search</button><br>
        <a href="index.php" class="button">Back</a>
    </form>

    <?php
    if ($query) {
        $sql = "SELECT * FROM items WHERE name LIKE '%$query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['name']} - {$row['description']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No items found.</p>";
        }
    }
    ?>
</div>
