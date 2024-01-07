<?php
require_once 'app/models/Wiki.php';
require_once 'app/models/Category.php';
require_once 'app/models/home.php';

class HomeController
{
    public function index()
    {
        $latestWikis = HomeModel::getLatestWikis();
        $latestCategories = HomeModel::getLatestCategories();

        // Afficher la vue
        include 'app/views/home.php';
    }
}
?>