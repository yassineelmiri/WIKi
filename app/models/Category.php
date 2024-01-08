<?php
require_once __DIR__ . '/Database.php';


class Category
{
    private $categoryId;
    private $name;

    public function __construct($categoryId, $name)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
    }

    // Getter pour categoryId
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    // Setter pour categoryId
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    // Getter pour name
    public function getName()
    {
        return $this->name;
    }

    // Setter pour name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Logique pour sauvegarder la catégorie dans la base de données
    public function save()
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("INSERT INTO Category (name) VALUES (?)");
        $stmt->bindParam(1, $this->name);
        $stmt->execute();

        $pdo = null;
    }

    // Autres méthodes liées à la catégorie
    // Logique pour récupérer toutes les catégories depuis la base de données
    public static function getAllCategories()
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->query("SELECT * FROM Category");
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $categories;
    }

    // Logique pour récupérer une catégorie spécifique par son ID depuis la base de données
    public static function getCategoryById($categoryId)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM Category WHERE category_id = ?");
        $stmt->bindParam(1, $categoryId);
        $stmt->execute();

        $category = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $category;
    }

    // Logique pour supprimer une catégorie par son ID
    public static function deleteCategoryById($categoryId)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("DELETE FROM Category WHERE category_id = ?");
        $stmt->bindParam(1, $categoryId);
        $stmt->execute();

        $pdo = null;
    }

    // Logique pour mettre à jour une catégorie par son ID
    public static function updateCategoryById($categoryId, $name)
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("UPDATE Category SET name = ? WHERE category_id = ?");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $categoryId);
        $stmt->execute();

        $pdo = null;
    }
}
