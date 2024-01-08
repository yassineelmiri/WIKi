<?php
require_once __DIR__ . '/Database.php';

class User
{
    private $user_id;
    private $username;
    private $email;
    private $password;

    public function __construct($user_id, $username, $email, $password)
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Getter pour user_id
    public function getUserId()
    {
        return $this->user_id;
    }

    // Setter pour user_id
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    // Getter pour username
    public function getUsername()
    {
        return $this->username;
    }

    // Setter pour username
    public function setUsername($username)
    {
        $this->username = $username;
    }

    // Getter pour email
    public function getEmail()
    {
        return $this->email;
    }

    // Setter pour email
    public function setEmail($email)
    {
        $this->email = $email;
    }

    // Getter pour password
    public function getPassword()
    {
        return $this->password;
    }

    // Setter pour password
    public function setPassword($password)
    {
        $this->password = $password;
    }

    // Logique pour sauvegarder l'utilisateur dans la base de données
    public function save()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("INSERT INTO User (username, email, password) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $this->password);
        $stmt->execute();

        $pdo = null;
    }

    // Logique pour récupérer un utilisateur par son ID depuis la base de données
    public static function getUserById($userId)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("SELECT * FROM User WHERE user_id = ?");
        $stmt->bindParam(1, $userId);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $user;
    }

    // Logique pour mettre à jour le mot de passe d'un utilisateur
    public static function updatePassword($userId, $newPassword)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("UPDATE User SET password = ? WHERE user_id = ?");
        $stmt->bindParam(1, $newPassword);
        $stmt->bindParam(2, $userId);
        $stmt->execute();

        $pdo = null;
    }

    // Logique pour supprimer un utilisateur par son ID
    public static function deleteUserById($userId)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("DELETE FROM User WHERE user_id = ?");
        $stmt->bindParam(1, $userId);
        $stmt->execute();

        $pdo = null;
    }
}
