<?php
require_once 'models/ItemModel.php';

class ItemHandler {
    private $itemModel;

    public function __construct() {
        $this->itemModel = new ItemModel(connectToDB());
    }

    public function displayItems() {
        $items = $this->itemModel->fetchItems();
        require 'views/items/view_list.php';
    }

    public function createItem() {
        $name = $_POST['item_name'] ?? '';
        $cost = $_POST['item_cost'] ?? '';
        $details = $_POST['item_details'] ?? '';
        $this->itemModel->addNewItem($name, $cost, $details);
        header('Location: main.php');
    }

    public function removeItem() {
        $id = $_POST['item_id'] ?? 0;
        $this->itemModel->deleteItem($id);
        header('Location: main.php');
    }
}
?>