<?php

require_once 'Category.php';

class CategoryController {
    
    // Action pour afficher toutes les catégories
    public function showAllCategories() {
        $categories = Category::getAllCategories();
        // Vous pouvez passer $categories à votre vue (frontend) pour l'affichage.
    }

    // Action pour afficher une catégorie spécifique par son ID
    public function showCategoryById($categoryId) {
        $category = Category::getCategoryById($categoryId);
        // Vous pouvez passer $category à votre vue (frontend) pour l'affichage.
    }

    // Action pour ajouter une nouvelle catégorie
    public function addCategory($name) {
        $newCategory = new Category(null, $name);
        $newCategory->save();
        // Redirection ou autre logique après l'ajout.
    }

    // Action pour mettre à jour une catégorie
    public function updateCategoryById($categoryId, $name) {
        Category::updateCategoryById($categoryId, $name);
        // Redirection ou autre logique après la mise à jour.
    }

    // Action pour supprimer une catégorie
    public function deleteCategoryById($categoryId){
        Category::deleteCategoryById($categoryId);
        // Redirection ou autre logique après la suppression.
    }
}
