<?php

class AdminController
{
    public function showAdminDashboard()
    {
        // Vérifiez si l'utilisateur est un administrateur, sinon redirigez-le
        $this->checkAdmin();

        // Logique pour afficher le tableau de bord de l'administrateur
        // Vous pouvez inclure des statistiques, des outils d'administration, etc.
        include __DIR__ . '/../views/admin/dashboard.php';
    }

    public function manageCategories()
    {
        // Vérifiez si l'utilisateur est un administrateur, sinon redirigez-le
        $this->checkAdmin();

        // Logique pour gérer les catégories (ajouter, modifier, supprimer)
        // Récupérez les catégories depuis le modèle (exemple : $categories = AdminModel::getAllCategories();)
        $categories = AdminModel::getAllCategory();

        // Incluez une vue pour afficher le formulaire de gestion des catégories, par exemple
        include __DIR__ . '/../views/admin/manage_categories.php';
    }

    public function manageUsers()
    {
        // Vérifiez si l'utilisateur est un administrateur, sinon redirigez-le
        $this->checkAdmin();

        // Logique pour gérer les utilisateurs (liste, bloquer, supprimer, etc.)
        // Incluez une vue pour afficher la liste des utilisateurs et les options de gestion
        include __DIR__ . '/../views/admin/manage_users.php';
    }

    private function checkAdmin()
    {
        // Logique pour vérifier si l'utilisateur est un administrateur
        // Par exemple, vérifiez le rôle de l'utilisateur dans la base de données
        // Si l'utilisateur n'est pas un administrateur, redirigez-le vers une autre page
        // Vous pouvez également utiliser une vérification de session si vous avez un système de connexion
        // Assurez-vous d'adapter cette logique en fonction de votre système d'authentification
        // et de la structure de votre base de données
        // Exemple basique : si l'utilisateur n'est pas admin, redirigez-le
        if (!isset($_SESSION['user']) || !$_SESSION['user']->isAdmin()) {
            header('Location: index.php?action=login');
            exit();
        }
    }
}
?>