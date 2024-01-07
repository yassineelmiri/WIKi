<?php
require_once 'app/models/Wiki.php';

class WikiController
{
    public function showAllWikis()
    {
        $wikis = Wiki::getAllWikis();
        // Vous pouvez passer $wikis à votre vue (frontend) pour l'affichage.
    }

    public function showWikiById($wikiId)
    {
        $wiki = Wiki::getWikiById($wikiId);
        // Vous pouvez passer $wiki à votre vue (frontend) pour l'affichage.
    }

    public function addWiki($authorId, $categoryId, $tags, $content)
    {
        $newWiki = new Wiki(null, $authorId, $categoryId, $tags, $content);
        $newWiki->save();
        // Redirection ou autre logique après l'ajout.
    }

    public function updateWikiById($wikiId, $title, $content)
    {
        Wiki::updateWikiById($wikiId, $title, $content);
        // Redirection ou autre logique après la mise à jour.
    }

    public function deleteWiki($wikiId)
    {
        Wiki::deleteWikiById($wikiId);
        // Redirection ou autre logique après la suppression.
    }
}
?>
