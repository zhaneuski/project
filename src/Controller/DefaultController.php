<?php

namespace Controller;

use Core\Config;
use Model\ApplicationModel;
use Model\DefaultModel;
use Model\UsersModel;
use TexLab\MyDB\DB;
use View\View;
use TexLab\MyDB\DbEntity;

class DefaultController extends AbstractTableController
{

    protected $tableName = "news";
    protected $usersTable;

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->table = new DefaultModel(
            $this->tableName,
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );

        $this->view->setFolder('default');
    }

    public function actionShow(array $data)
    {
        parent::actionShow($data);
        $this
            ->view
            ->setFolder('default');
        $this->view->addData(
            [
                'table' => $this
                    ->table
                    ->reset()
                    ->setPageSize(Config::PAGE_DEFAULT_SIZE)
                    ->getDefaultPage($data['get']['page'] ?? 1)
            ]
        );
    }










//    public function actionDefault()
//    {
//        $this
//            ->view
//            ->setFolder('default')
//            ->setTemplate('default');
//    }
}
