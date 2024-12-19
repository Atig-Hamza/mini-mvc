<?php
define('SERVER', 'localhost');
define('DATABASE', 'app_db');
define('USERNAME', 'root');
define('PASSWORD', '');

function connectToDB() {
    try {
        $connection = new PDO('mysql:host=' . SERVER . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $error) {
        echo 'Database connection failed: ' . $error->getMessage();
        exit;
    }
}
?>