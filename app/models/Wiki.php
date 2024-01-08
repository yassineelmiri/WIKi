<?php
require_once __DIR__ . '/Database.php';

class Wiki
{
    private $wiki_id;
    private $title;
    private $content;
    private $user_id;
    private $created_at;

    public function __construct($wiki_id, $title, $content, $user_id, $created_at)
    {
        $this->wiki_id = $wiki_id;
        $this->title = $title;
        $this->content = $content;
        $this->user_id = $user_id;  // Correction ici
        $this->created_at = $created_at;

    }

    // ... (constructeur, getters, setters, etc.)

    public function save()
    {
        $pdo = Database::getInstance();

        // Préparez la requête SQL
        $stmt = $pdo->prepare("INSERT INTO Wiki (title, content, user_id, created_at) VALUES (?, ?, ?, NOW())");

        // Liez les valeurs
        $stmt->bindParam(1, $this->title);
        $stmt->bindParam(2, $this->content);
        $stmt->bindParam(3, $this->user_id);

        // Exécutez la requête
        $stmt->execute();

        // Fermez la connexion PDO
        $pdo = null;
    }

    public static function getAllWikis()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT * FROM Wiki ORDER BY created_at DESC");
        $wikis = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $wikis;
    }

    public static function getWikiById($wikiId)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("SELECT * FROM Wiki WHERE wiki_id = ?");
        $stmt->bindParam(1, $wikiId);
        $stmt->execute();

        $wiki = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $wiki;
    }

    public static function updateWikiById($wikiId, $title, $content)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("UPDATE Wiki SET title = ?, content = ? WHERE wiki_id = ?");
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $content);
        $stmt->bindParam(3, $wikiId);
        $stmt->execute();

        $pdo = null;
    }

    // Logique pour supprimer un wiki par son ID
    public static function deleteWikiById($wikiId)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("DELETE FROM Wiki WHERE wiki_id = ?");
        $stmt->bindParam(1, $wikiId);
        $stmt->execute();

        $pdo = null;
    }
}
