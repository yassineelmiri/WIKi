<?php
require_once __DIR__ . '/../models/AuthModel.php';


class AuthController
{
    public function showLoginForm()
    {
        include __DIR__ . '/../views/login.php';

    }

    public function login()
    {
        // Récupérer les données du formulaire
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Authentifier l'utilisateur
        $user = AuthModel::authenticate($email, $password);

        if ($user) {
            // Enregistrez les informations de l'utilisateur dans la session
            session_start();
            $_SESSION['user'] = $user;

            // Redirection vers le tableau de bord ou la page d'accueil après la connexion
            header('Location: index.php?action=dashboard');
            exit();
        } else {
            // Gestion des erreurs de connexion, redirigez vers la page de connexion
            header('Location: index.php?action=login');
            exit();
        }
    }

    public function showRegistrationForm()
    {
        include __DIR__ . '/../views/register.php';
    }

    public function register()
    {
        // Récupérer les données du formulaire
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Inscrire le nouvel utilisateur
        $result = AuthModel::registerUser($username, $email, $password);

        if ($result) {
            // Redirection vers le tableau de bord ou la page d'accueil après l'inscription
            header('Location: index.php?action=login');
            exit();
        } else {
            // Gestion des erreurs d'inscription, redirigez vers la page d'inscription
            header('Location: index.php?action=register');
            exit();
        }
    }
}
?>
