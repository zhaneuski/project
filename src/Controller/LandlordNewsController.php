<?php

namespace Controller;

use Core\Config;
use Model\NewsModel;
use Model\UsersModel;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use View\View;

class LandlordNewsController extends AbstractTableController
{
    protected $tableName = "news";

//    public function __construct(View $view)
//    {
//        parent::__construct($view);
//        $this->table = new NewsModel(
//            $this->tableName,
//            DB::Link([
//                'host' => Config::MYSQL_HOST,
//                'username' => Config::MYSQL_USER_NAME,
//                'password' => Config::MYSQL_PASSWORD,
//                'dbname' => Config::MYSQL_DATABASE
//            ])
//        );
//        $this->view->setFolder('landlordnews');
//    }
}