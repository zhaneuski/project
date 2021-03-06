<?php

namespace Controller;

use Core\Config;
use Model\NewsModel;
use Model\UsersModel;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use View\View;

class NewsController extends AbstractTableController
{
    protected $tableName = "news";

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->view->setFolder('news');
    }

    public function actionShow(array $data)
    {
        $this
            ->view
            ->setFolder('news')
            ->setTemplate('show')
            ->setData([
                'table' => $this
                    ->table
                    ->reset()
                    ->setPageSize(Config::PAGE_SIZE)
                    ->setOrderBy('`id` DESC')
                    ->getPage($data['get']['page'] ?? 1),
                "currentPage"=> ($data['get']['page'] ?? 1),
                'fields' => array_diff($this->table->getColumnsNames(), ['id']),
                'comments' => $this->table->getColumnsComments(),
                'type' => $this->getClassName(),
                'pageCount' => $this->table->pageCount()
            ]);
    }
}
