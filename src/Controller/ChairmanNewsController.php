<?php

namespace Controller;

use Core\Config;
use Model\NewsModel;
use Model\UsersModel;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use View\View;

class ChairmanNewsController extends NewsController
{
    protected $tableName = "`news`";
}