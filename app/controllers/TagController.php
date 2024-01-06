<?php

require_once '../models/tag.php';

class TagController {

    // Action pour afficher tous les tags
    public function showAllTags() {
        $tags = Tag::getAllTags();
        // Vous pouvez passer $tags à votre vue (frontend) pour l'affichage.
    }

    // Action pour afficher un tag spécifique par son ID
    public function showTagById($tagId) {
        $tag = Tag::getTagById($tagId);
        // Vous pouvez passer $tag à votre vue (frontend) pour l'affichage.
    }

    // Action pour ajouter un nouveau tag
    public function addTag($name) {
        $newTag = new Tag(null, $name);
        $newTag->save();
        // Redirection ou autre logique après l'ajout.
    }

    // Action pour mettre à jour un tag
    public function updateTag($tagId, $name) {
        Tag::updateTagById($tagId, $name);
        // Redirection ou autre logique après la mise à jour.
    }

    // Action pour supprimer un tag
    public function deleteTag($tagId) {
        Tag::deleteTagById($tagId);
        // Redirection ou autre logique après la suppression.
    }
}
