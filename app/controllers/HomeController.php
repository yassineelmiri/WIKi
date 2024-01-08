<?php

require_once __DIR__ . '/../models/HomeModel.php';

class HomeController
{
    public function index()
    {
        $latestWikis = HomeModel::getLatestWikis();
        $latestCategories = HomeModel::getLatestCategories();

        // Afficher la vue
         include __DIR__ . '/../views/index.php';

    }
}
?>
