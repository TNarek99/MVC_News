<?php

require_once ROOT . '../core/Model/CatTable.php';

class CatController
{
    public function listAction()
    {
        $catTable = new CatTable();
        $cats = $catTable->getCats();
        require ROOT . '/View/CatsList.php';
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