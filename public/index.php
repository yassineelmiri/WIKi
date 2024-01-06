<?php
// index.php

// Charger les dépendances et config
require_once 'config/config.php';
require_once 'app/controllers/HomeController.php';

// Instancier le contrôleur de la page d'accueil
$homeController = new HomeController();

// Afficher la page d'accueil
$homeController->index();
?>
