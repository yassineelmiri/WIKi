<?php

require_once 'Wiki.php';
require_once 'Category.php';
require_once __DIR__ . '/../config/config.php';

class HomeModel
{

    public static function getLatestWikis()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT * FROM Wiki ORDER BY created_at DESC LIMIT 5");
        $latestWikis = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $latestWikis;
    }

    public static function getLatestCategories()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT * FROM 	category ORDER BY category_id DESC LIMIT 5");
        $latestCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $latestCategories;
    }

    public static function getSomeOtherData()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT * FROM YourTable WHERE some_condition");
        $otherData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $otherData;
    }
}
?>