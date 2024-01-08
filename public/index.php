<?php
require '../app/controllers/HomeController.php';
require '../app/controllers/CategoryController.php';
require '../app/controllers/WikiController.php';
require '../app/controllers/DashboardControllre.php';

// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'index':
            $hoe = new HomeController();
            $hoe->index();
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
        case 'dashboard':

            $dashboard = new DashboardController(); // Instanciez le contrôleur du tableau de bord
            $dashboard->index(); // Appelez la méthode index pour afficher le tableau de bord
            break;
        case 'insert':
            $title = $_POST['title'];
            $content = $_POST['content'];
            $user_id = $_POST['user_id'];
            // Créer une nouvelle Wiki et l'ajouter
            $wikiController = new WikiController();
            $wikiController->addWiki($title, $content, $user_id);
            $ho = new HomeController();
            $ho->index();
            break;
        default:
            header('location: 404.php');
            break;
    }
}
?>