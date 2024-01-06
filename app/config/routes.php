<?php

// Inclure les contrôleurs nécessaires
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/DashboardController.php';

// Définir les routes
$routes = [
    '' => [
        'controller' => 'HomeController',
        'action' => 'index'
    ],
    'dashboard' => [
        'controller' => 'DashboardController',
        'action' => 'index'
    ],

];

$path = $_SERVER['REQUEST_URI'];
$path = parse_url($path, PHP_URL_PATH);

$route = null;
foreach ($routes as $pattern => $params) {
    if ($path === "/wifi/{$pattern}") {
        $route = $params;
        break;
    }
}

if ($route) {
    $controllerName = $route['controller'];
    $action = $route['action'];
   
    require_once "app/controllers/{$controllerName}.php";

    $controller = new $controllerName();
    $controller->$action();
} else {

    echo '404 - Not Found';
}

?>