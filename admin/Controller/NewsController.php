<?php

require_once ROOT . '../core/Model/NewsTable.php';

class NewsController
{
    public function listAction()
    {
        $newsTable = new NewsTable();
        $news = $newsTable->getNews();
        require_once ROOT . '/View/NewsList.php';
    }

    public function createAction($data)
    {

    }

    public function updateAction($id, $data)
    {
        
    }

    public function deleteAction($id)
    {

    }
}