<?php


namespace Controller;


use Core\Config;

class LandlordApplicationController extends ApplicationController

{
    public function actionShow(array $data)
    {
        parent::actionShow($data); // TODO: Change the autogenerated stub

//        print_r($_SESSION);
        $this->view
            ->setFolder("landlordapplication")
            ->addData(
                [
                    "user_id" => $_SESSION['user']['id'],
                    "usersList" => $this->usersTable->getUsers(),
                    'table' => $this
                        ->table
                        ->reset()
                        ->setPageSize(Config::PAGE_SIZE)
                        ->getApplicationPageUserFilter($data['get']['page'] ?? 1, $_SESSION['user']['id'])
                ]
            );
    }
}