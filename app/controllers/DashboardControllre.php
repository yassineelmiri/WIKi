<?php
require_once 'app/models/Wiki.php'; 
require_once 'app/models/User.php';
require_once 'app/models/Dashbord.php'; 

class DashboardController {
    public function index() {
        // Assurez-vous que l'utilisateur est connecté en tant qu'administrateur
        $this->checkAdmin();

        $stats = $this->getStats();

        include 'app/views/dashboard.php';
    }

    private function checkAdmin() {
        session_start();
        if (!isset($_SESSION['user']) || !$_SESSION['user']->isAdmin()) {
            header('Location: index.php');
            exit();
        }
    }

    private function getStats() {
        $stats = [
            'totalWikis' => DashboardModel::getTotalWikis(),
            'totalUsers' => DashboardModel::getTotalUsers(), 
           
        ];

        return $stats;
    }
}
?>
