<?php
require_once 'config/database.php';
require_once 'controllers/ItemHandler.php';

$handler = new ItemHandler();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add_item') {
        $handler->createItem();
    } elseif (isset($_POST['action']) && $_POST['action'] === 'remove_item') {
        $handler->removeItem();
    }
} else {
    $handler->displayItems();
}
?>