<?php
require '../app/controllers/HomeController.php';
require '../app/controllers/CategoryController.php';
require '../app/controllers/WikiController.php';

// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'index':
            $ho = new HomeController();
            $ho->index();
            break;
        case 'category':
            $categoryId = $_GET['id'];
            $hom = new CategoryController();
            $hom->showCategoryById($categoryId);
            break;
        case 'wiki':
            $id = $_GET['id'];
            $ho = new WikiController();
            $ho->showWikiById($id);
            break;
        default:
            header('location: 404.php');
            break;
    }
}
?>
