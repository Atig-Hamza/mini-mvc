<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Items</title>
</head>
<body>
    <h1>Item Collection</h1>
    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                <?php echo htmlspecialchars($item['name']) . ' - $' . htmlspecialchars($item['cost']); ?>
                <form action="main.php" method="post" style="display:inline;">
                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                    <input type="hidden" name="action" value="remove_item">
                    <button type="submit">Remove</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <h2>Add New Item</h2>
    <form action="main.php" method="post">
        <label for="item_name">Name:</label>
        <input type="text" id="item_name" name="item_name" required>
        <br>
        <label for="item_cost">Cost:</label>
        <input type="number" id="item_cost" name="item_cost" step="0.01" required>
        <br>
        <label for="item_details">Details:</label>
        <textarea id="item_details" name="item_details"></textarea>
        <br>
        <input type="hidden" name="action" value="add_item">
        <button type="submit">Add</button>
    </form>
</body>
</html>