<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listName = $_POST['delete_list_name'];
    $itemName = $_POST['delete_item_name'];

    // Update the document to pull the specified item from the specified list
    $updateResult = $collection->updateOne(
        ['name' => $listName],
        ['$pull' => ['items' => $itemName]]
    );

    if ($updateResult->getModifiedCount() > 0) {
        echo "To-Do item deleted successfully.";
    } else {
        echo "Failed to delete To-Do item.";
    }
}
?>
