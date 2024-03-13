<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listName = $_POST['list_name'];
    $itemName = $_POST['item_name'];

    // Check if the list already exists
    $existingList = $collection->findOne(['name' => $listName]);

    if ($existingList) {
        // Update existing list to add new item
        $updateResult = $collection->updateOne(
            ['name' => $listName],
            ['$push' => ['items' => $itemName]]
        );

        if ($updateResult->getModifiedCount() > 0) {
            echo "Item '$itemName' added successfully to list '$listName'.";
        } else {
            echo "Failed to add item '$itemName' to list '$listName'.";
        }
    } else {
        // Insert new list with the item
        $insertResult = $collection->insertOne(
            ['name' => $listName, 'items' => [$itemName]]
        );

        if ($insertResult->getInsertedCount() > 0) {
            echo "List '$listName' created successfully with item '$itemName'.";
        } else {
            echo "Failed to create list '$listName' with item '$itemName'.";
        }
    }
}
?>




