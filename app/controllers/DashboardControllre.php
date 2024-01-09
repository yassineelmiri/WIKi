<?php
require_once __DIR__ . '/../models/Dashbord.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Wiki.php';

// require '../autoloader.php';
// Autoloader::registre();
// use \models\Wiki;
// use \models\User;
// use \models\Dashboard;

class DashboardController
{
    public function index()
    {
        // Assurez-vous que l'utilisateur est connecté en tant qu'administrateur

        
        $stats = $this->getStats();
        include __DIR__ . '/../views/dashboard.php';
    }

    private function checkAdmin()
    {
        session_start();
        if (!isset($_SESSION['user']) || !$_SESSION['user']->isAdmin()) {
            header('Location: dashboard.php');
            exit();
        }
    }

    private function getStats()
    {
        $stats = [
            'totalWikis' => DashboardModel::getTotalWikis(),
            'totalUsers' => DashboardModel::getTotalUsers(),
            'totalGategory'=> DashboardModel::getTotalCategory(),

        ];

        return $stats;
    }
}

