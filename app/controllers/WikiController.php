<?php

require_once 'Wiki.php';


class WikiController
{

    // Action pour afficher tous les wikis
    public function showAllWikis()
    {
        $wikis = Wiki::getAllWikis();
        // Vous pouvez passer $wikis à votre vue (frontend) pour l'affichage.
    }

    // Action pour afficher un wiki spécifique par son ID
    public function showWikiById($wikiId)
    {
        $wiki = Wiki::getWikiById($wikiId);
        // Vous pouvez passer $wiki à votre vue (frontend) pour l'affichage.
    }

    // Action pour ajouter un nouveau wiki
    public function addWiki($authorId, $categoryId, $tags, $content)
    {
        $newWiki = new Wiki(null, $authorId, $categoryId, $tags, $content);
        $newWiki->save();
        // Redirection ou autre logique après l'ajout.
    }
    // Action pour mettre à jour un wiki
    public function updateWikiById($wikiId, $title, $content)
    {
        Wiki::updateWikiById($wikiId, $title, $content);
        // Redirection ou autre logique après la mise à jour.
    }

    // Action pour supprimer un wiki
    public function deleteWiki($wikiId)
    {
        Wiki::deleteWikiById($wikiId);
        // Redirection ou autre logique après la suppression.
    }
}
