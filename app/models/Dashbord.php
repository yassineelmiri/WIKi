<?php


require_once __DIR__ . '/../models/Database.php';


class DashboardModel
{

    public static function getTotalWikis()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT COUNT(*) as total FROM Wiki");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $result['total'];
    }

    public static function getTotalUsers()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT COUNT(*) as total FROM User");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $result['total'];
    }
    public static function getTotalCategory()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT COUNT(*) as total FROM category");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $result['total'];
    }

    // Ajoutez d'autres méthodes pour récupérer d'autres statistiques si nécessaire
}
?>