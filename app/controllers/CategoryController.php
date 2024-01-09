<?php

require_once __DIR__ . '/../models/Category.php';


class CategoryController
{

    // Action pour afficher toutes les catégories
    public function showAllCategories()
    {
        $categories = Category::getAllCategories();
        include __DIR__ . '/../views/category.php';
    }

    // Action pour afficher une catégorie spécifique par son ID
    public function showCategoryById($categoryId)
    {
        $category = Category::getCategoryById($categoryId);
        include __DIR__ . '/../views/category.php';
    }

    // Action pour ajouter une nouvelle catégorie
    public function addCategory($name)
    {
        $newCategory = new Category(null, $name);
        $newCategory->save();
        header('Location: categories.php');
        exit();
    }

    // Action pour mettre à jour une catégorie
    public function updateCategoryById($categoryId, $name)
    {
        Category::updateCategoryById($categoryId, $name);
        header('Location: categories.php');
        exit();
    }

    // Action pour supprimer une catégorie
    public function deleteCategoryById($categoryId)
    {
        Category::deleteCategoryById($categoryId);
        header('Location: categories.php');
        exit();
    }
}
?>