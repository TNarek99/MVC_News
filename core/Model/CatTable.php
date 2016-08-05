<?php

require_once ROOT . "../core/Entity/CatTableRow.php";
require_once ROOT . "../core/classes/Connection.php";

class CatTable
{
    /**
     * @var string
     */
    private $dbTable;

    public function __construct()
    {
        $this->dbTable = "cats";
    }

    public function getCats()
    {
        $statement = Connection::getConnection()->prepare('SELECT id, title FROM ' . $this->dbTable);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        
        $result = $statement->fetchAll();
        
        $cats = [];
        
        foreach ($result as $item) {
            $catsItem = new CatTableRow();
            $catsItem->setId($item['id']);
            $catsItem->setTitle($item['title']);
            $cats[] = $catsItem;
        }
        
        return $cats;
    }
}