<?php
class ItemModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function fetchItems() {
        $query = $this->db->query("SELECT * FROM items");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNewItem($name, $cost, $details) {
        $query = $this->db->prepare("INSERT INTO items (name, cost, details) VALUES (:name, :cost, :details)");
        $query->execute(['name' => $name, 'cost' => $cost, 'details' => $details]);
    }

    public function deleteItem($id) {
        $query = $this->db->prepare("DELETE FROM items WHERE id = :id");
        $query->execute(['id' => $id]);
    }
}
?>