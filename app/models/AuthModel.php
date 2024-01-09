<?php
require_once 'Database.php';
require_once 'User.php';

class AuthModel
{
    public static function authenticate($email, $password)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        if ($userData && password_verify($password, $userData['password'])) {
            return new User($userData['user_id'], $userData['username'], $userData['email'], $userData['password']);
        } else {
            return false;
        }
    }

    public static function registerUser($username, $email, $password)
    {
        $pdo = Database::getInstance();

        // Vérifier si l'email existe déjà
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            return false; // L'utilisateur existe déjà
        }

        // Hasher le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insérer le nouvel utilisateur dans la base de données
        $stmt = $pdo->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword]);

        $pdo = null;

        return true;
    }
}
?>