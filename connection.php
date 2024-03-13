<?php
require 'vendor/autoload.php';

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");
$database = $client->selectDatabase('mydatabase');
$collection = $database->selectCollection('todo_lists');
?>

