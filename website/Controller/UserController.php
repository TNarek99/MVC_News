<?php

require_once ROOT . '../core/Model/NewsTable.php';
require_once ROOT . '../core/Model/CatTable.php';

class UserController
{
    public function listAction()
    {
        $newsTable = new NewsTable();
        $catsTable = new CatTable();
        
        $news = $newsTable->getNews();
        $cats = $catsTable->getCats();
        
        $category = $cats[0]->getTitle();
        if (isset($_GET["category"])) {
            $category = $_GET["category"];
        }
        
        require_once ROOT . '/View/NewsList.php';
    }
}