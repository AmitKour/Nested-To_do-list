<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h2>Add New To-Do Item</h2>
    <form action="add.php" method="post">
        <label for="list_name">List Name:</label>
        <input type="text" name="list_name" id="list_name" required>
        <br><br>
        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" id="item_name" required>
        <br><br>
        <input type="submit" value="Add Item">
    </form>

    <h2>Delete To-Do Item</h2>
    <form action="delete.php" method="post">
        <label for="delete_list_name">List Name:</label>
        <input type="text" name="delete_list_name" id="delete_list_name" required>
        <br><br>
        <label for="delete_item_name">Item Name:</label>
        <input type="text" name="delete_item_name" id="delete_item_name" required>
        <br><br>
        <input type="submit" value="Delete Item">
    </form>
</body>
</html>
