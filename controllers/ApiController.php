<?php

namespace app\controllers;

use app\model\AuthorizationModel;

class ApiController
{

    protected $action;
    protected $defaultAction = 'all';
    public $params = [];
    public $authModel = null;
    public $user;

    public function __construct()
    {
        session_start();
        $this->authModel = new AuthorizationModel;
        $this->user = $this->authModel->getUser();
        $this->params['user'] = $_SESSION['user']['login'] ?: null;
        $this->params['admin'] = $_SESSION['user']['admin'] ?: null;
    }

    public function runAction($acton = null)
    {
        $url_array = explode('/', $_SERVER['REQUEST_URI']);
        $action = $url_array[2];
        if (strstr($action, '?')) {
            $action =  explode('?', $action)[0];
        }

        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        }
    }
}
