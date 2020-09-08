<?php

namespace Core;

use Controller\TableController;
use View\View;

class Router
{
    protected $view;
    protected $controllerName;
    protected $actionName;

    public function __construct()
    {
        $this->view = new View();
        $this->controllerName = "Controller\\" . (ucfirst(strtolower($_GET['type'] ?? 'Default'))) . "Controller";
        $this->actionName = "action" . ($_GET['action'] ?? 'show');
    }

    public function run()
    {
        $blockList = (array) json_decode(file_get_contents(Config::BLOCK_LIST));
        $cod = $_SESSION['user']['cod'] ?? "default";
        $this->view->setLayout('mainLayout');

        if (!in_array($_GET['type'], $blockList[$cod])) {
            if (class_exists($this->controllerName)) {
                $controller = new $this->controllerName(
                    $this->view
                );
                $controllerData = ['post' => $_POST, 'get' => $_GET];
                if (method_exists($controller, $this->actionName)) {
                    $controller->{$this->actionName}($controllerData);
                    $this
                        ->view
                        ->addData(['controllerType' => $_GET['type']])
                        ->view();
                } else {
                    header("HTTP/1.0 404 Not Found");
                }
            } else {
                header("HTTP/1.0 404 Not Found");
            }
        } else {
            header('HTTP/1.0 403 Forbidden');
        }
    }
}
