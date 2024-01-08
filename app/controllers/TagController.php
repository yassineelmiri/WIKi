<?php
require_once __DIR__ . '/../models/tag.php';

class TagController {


    public function showAllTags() {
        $tags = Tag::getAllTags();
        include '/../views/tag.php';
    }

    // Action pour afficher un tag spécifique par son ID
    public function showTagById($tagId) {
        $tag = Tag::getTagById($tagId);
        include '/../views/tag.php';
    }

    // Action pour ajouter un nouveau tag
    public function addTag($name) {
        $newTag = new Tag(null, $name);
        $newTag->save();
        header('Location: tags.php');
        exit();
    }

    // Action pour mettre à jour un tag
    public function updateTag($tagId, $name) {
        Tag::updateTagById($tagId, $name);
        header('Location: tags.php');
        exit();
    }

    // Action pour supprimer un tag
    public function deleteTag($tagId) {
        Tag::deleteTagById($tagId);
        header('Location: tags.php');
        exit();
    }
}
?>
