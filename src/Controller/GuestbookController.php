<?php


namespace Controller;


use Core\Config;

class GuestbookController extends AbstractTableController
{
    protected $tableName = "guestbook";

    public function actionShow(array $data)
    {

        switch ($_SESSION['user']['cod']) {
            case 'admin':
                $this
                    ->view
                    ->setFolder('guestbook')
                    ->setTemplate('showadmin')
                    ->setData([
                        'table' => $this->table->get(),
                        'fields' => array_diff($this->table->getColumnsNames(), ['id']),
                        'comments' => $this->table->getColumnsComments(),
                        'type' => $this->getClassName()
                    ]);
                break;
            case 'user':
                $this
                    ->view
                    ->setFolder('guestbook')
                    ->setTemplate('showuser')
                    ->setData([
                        'table' => $this->table->get(),
                        'fields' => array_diff($this->table->getColumnsNames(), ['id']),
                        'comments' => $this->table->getColumnsComments(),
                        'type' => $this->getClassName()
                    ]);
                break;
        }
    }
}
