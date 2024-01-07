<?php
// AuthController.php

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Exemple de code (à adapter selon votre logique d'authentification réelle)
            if ($this->validateUser($email, $password)) {
                
                header('Location: dashboard.php');
                exit();
            } else {
                $error = "Identifiants invalides";
            }
        }

        include 'app/views/login.php';
    }

    private function validateUser($email, $password)
    {
        
        $validEmail = 'user@example.com';
        $validPassword = password_hash('password123', PASSWORD_DEFAULT);

        return ($email === $validEmail && password_verify($password, $validPassword));
    }
}
?>
