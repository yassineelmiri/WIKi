<?php

require_once 'Database.php';

class AdminModel
{
    public static function getAllcategory()
    {
        $pdo = Database::getInstance();

        // Logique pour récupérer toutes les catégories depuis la base de données
        $stmt = $pdo->query("SELECT * FROM category");
        $category = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $category;
    }

    public static function addCategory($categoryName)
    {
        $pdo = Database::getInstance();

        // Logique pour ajouter une nouvelle catégorie à la base de données
        $stmt = $pdo->prepare("INSERT INTO category (name) VALUES (?)");
        $stmt->execute([$categoryName]);

        $pdo = null;
    }

    public static function getAlluser()
    {
        $pdo = Database::getInstance();

        // Logique pour récupérer tous les utilisateurs depuis la base de données
        $stmt = $pdo->query("SELECT * FROM user");
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $user;
    }

    // Ajoutez d'autres méthodes pour gérer les utilisateurs (bloquer, supprimer, etc.)
}
?>
