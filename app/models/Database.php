<?php

require_once __DIR__ . '/../config/config.php';

class Database {
    private static $pdo;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>
