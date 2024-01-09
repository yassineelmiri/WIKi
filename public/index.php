<?php
require '../app/controllers/HomeController.php';
require '../app/controllers/CategoryController.php';
require '../app/controllers/WikiController.php';
require '../app/controllers/DashboardControllre.php';
require '../app/controllers/AuthController.php';
require '../app/controllers/AdminController.php'; // Ajout du contrôleur d'authentification


// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'index':
            $home = new HomeController();
            $home->index();
            break;
        case 'category':
            $categoryId = $_GET['id'];
            $category = new CategoryController();
            $category->showCategoryById($categoryId);
            break;
        case 'wiki':
            $id = $_GET['id'];
            $wiki = new WikiController();
            $wiki->showWikiById($id);
            break;
        case 'dashboard':
            $dashboard = new DashboardController();
            $dashboard->index();
            break;
        case 'insert':
            $title = $_POST['title'];
            $content = $_POST['content'];
            $user_id = $_POST['user_id'];

            $wikiController = new WikiController();
            $wikiController->addWiki($title, $content, $user_id);
            $home = new HomeController();
            $home->index();
            break;
        case 'login':
            $auth = new AuthController();
            $auth->showLoginForm();
            break;
        case 'process_login':
            $auth = new AuthController();
            $auth->login();
            break;
        case 'register':
            $auth = new AuthController();
            $auth->showRegistrationForm();
            break;
        case 'process_registration':
            $auth = new AuthController();
            $auth->register();
            break;
        case 'manage':
            $adminController = new AdminController();
            $adminController->manageCategories(); // Appel de la méthode pour gérer les catégories
            break;
        default:
            header('location: 404.php');
            break;
    }
}
?>