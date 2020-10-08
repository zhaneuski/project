<?php

namespace Controller;

use Core\Config;
use Model\ApplicationModel;
use Model\UsersModel;
use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use View\View;

class ApplicationController extends AbstractTableController
{
    protected $tableName = "application";
    protected $usersTable;

    public function __construct(View $view)
    {
        parent::__construct($view);
        $this->table = new ApplicationModel(
            $this->tableName,
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
        $this->usersTable = new UsersModel(
            "users",
            DB::Link([
                'host' => Config::MYSQL_HOST,
                'username' => Config::MYSQL_USER_NAME,
                'password' => Config::MYSQL_PASSWORD,
                'dbname' => Config::MYSQL_DATABASE
            ])
        );
        $this->view->setFolder('application');
    }

    public function actionShow(array $data)
    {
        parent::actionShow($data);
        $this
            ->view
            ->setFolder('application');
        $this->view->addData(
            [
                "usersList" => $this->usersTable->getUsers(),
                'table' => $this
                    ->table
                    ->reset()
                    ->setPageSize(Config::PAGE_SIZE)
                    ->getApplicationPage($data['get']['page'] ?? 1),
                "currentPage"=> ($data['get']['page'] ?? 1)
            ]
        );
    }

    public function actionShowEdit(array $data)
    {
        parent::actionShowEdit($data); // TODO: Change the autogenerated stub

        $this
            ->view
            ->setFolder('application');
        $this->view->addData(
            [
                "usersList" => $this->usersTable->getUsers(),
            ]
        );
    }

    public function actionAdd(array $data)
    {
        $data['post']['image'] = $_FILES['image']['name'];
        $id = $this->table->add($data['post']);
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], "images/application/$id.$ext");
        $this->redirect('?action=show&type=' . $this->getClassName());

    }

    public function actionEdit(array $data)
    {
        $data['post']['image'] = $_FILES['image']['name'];
        $id = $data['post']['id'];
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], "images/application/$id.$ext");
        parent::actionEdit($data); // TODO: Change the autogenerated stub
        $this->redirect('?action=show&type=' . $this->getClassName());

    }

    public function actionDel(array $data)
    {
        $id = $data['get']['id'];
        $image = $this->table->get(['id' => $id])[0]['image'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);

        if (file_exists ("images/application/$id.$ext")) {
            unlink("images/application/$id.$ext");
        }
        parent::actionDel($data);
    }
}
