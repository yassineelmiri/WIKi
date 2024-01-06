<?php

class Tag
{
    private $tag_id;
    private $name;

    public function __construct($tag_id, $name)
    {
        $this->tag_id = $tag_id;
        $this->name = $name;
    }

    // Getter pour tag_id
    public function getTagId()
    {
        return $this->tag_id;
    }

    // Setter pour tag_id
    public function setTagId($tag_id)
    {
        $this->tag_id = $tag_id;
    }

    // Getter pour name
    public function getName()
    {
        return $this->name;
    }

    // Setter pour name
    public function setName($name)
    {
        $this->name = $name;
    }

    public function save()
    {
        // Logique pour sauvegarder le tag dans la base de données
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("INSERT INTO Tag (name) VALUES (?)");
        $stmt->bindParam(1, $this->name);
        $stmt->execute();

        $pdo = null;
    }

    // Logique pour récupérer tous les tags depuis la base de données
    public static function getAllTags()
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->query("SELECT * FROM Tag");
        $tags = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

        return $tags;
    }

    // Logique pour récupérer un tag spécifique par son ID depuis la base de données
    public static function getTagById($tagId)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("SELECT * FROM Tag WHERE tag_id = ?");
        $stmt->bindParam(1, $tagId);
        $stmt->execute();

        $tag = $stmt->fetch(PDO::FETCH_ASSOC);

        $pdo = null;

        return $tag;
    }

    // Logique pour mettre à jour un tag par son ID
    public static function updateTagById($tagId, $name)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("UPDATE Tag SET name = ? WHERE tag_id = ?");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $tagId);
        $stmt->execute();

        $pdo = null;
    }

    // Logique pour supprimer un tag par son ID
    public static function deleteTagById($tagId)
    {
        $pdo = Database::getInstance();

        $stmt = $pdo->prepare("DELETE FROM Tag WHERE tag_id = ?");
        $stmt->bindParam(1, $tagId);
        $stmt->execute();

        $pdo = null;
    }
}
