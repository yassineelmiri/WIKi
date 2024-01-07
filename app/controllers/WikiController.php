<?php
require_once 'app/models/Wiki.php';

class WikiController
{
    public function showAllWikis()
    {
        $wikis = Wiki::getAllWikis();
        include 'app/views/wiki.php';
    }

    public function showWikiById($wikiId)
    {
        $wiki = Wiki::getWikiById($wikiId);
        include 'app/views/wiki.php';
    }

    public function addWiki($authorId, $categoryId, $tags, $content)
    {
        $newWiki = new Wiki(null, $authorId, $categoryId, $tags, $content);
        $newWiki->save();
        header('Location: index.php');
        exit();
    }

    public function updateWikiById($wikiId, $title, $content)
    {
        Wiki::updateWikiById($wikiId, $title, $content);
        header('Location: wiki.php?wikiId=' . $wikiId);
        exit();
    }

    public function deleteWiki($wikiId)
    {
        Wiki::deleteWikiById($wikiId);
        header('Location: index.php');
        exit();
    }
}

