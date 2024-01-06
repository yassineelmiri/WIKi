<?php

require_once 'app/models/Wiki.php';
require_once 'app/models/Category.php';

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

        $stmt = $pdo->query("SELECT * FROM Category ORDER BY created_at DESC LIMIT 5");
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