<?php

require_once ROOT . '../core/Entity/NewsTableRow.php';
require_once ROOT . '../core/classes/Connection.php';

class NewsTable
{
    /**
     * @var string
     */
    private $dbTable;

    /**
     * SudentDB constructor.
     * @param string $dbTable
     */
    public function __construct()
    {
        $this->dbTable = 'news';
    }

    public function getNews()
    {
        $statement = Connection::getConnection()->prepare('SELECT id, image, title, content, date, category_id FROM ' . $this->dbTable);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $result = $statement->fetchAll();

        $news = [];
        foreach ($result as $item){
            $newsItem = new NewsTableRow();
            $newsItem->setId($item['id']);
            $newsItem->setDate($item['date']);
            $newsItem->setTitle($item['title']);
            $newsItem->setContent($item['content']);
            $news[] = $newsItem;
        }
        return $news;

    }
/*
    public function deleteStudent($studentId)
    {
        $statement = $this->dbConnection->getConnection()->prepare('DELETE FROM ' . $this->dbTable . ' WHERE id=' . $studentId);
        $statement->execute();

    }
*/
}