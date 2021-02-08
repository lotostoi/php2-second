<?php

namespace app\controllers;

use app\model\AuthorizationModel;
use app\engine\Session;
use app\model\repositories\UsersRepository;

class ApiController
{

    protected $action;
    protected $defaultAction = 'all';
    public $params = [];
    public $authModel = null;
    public $user;

    public function __construct()
    {

        $session = new Session();
        $session->sessionStart();
        $this->authModel = new UsersRepository();
        $this->user = $this->authModel->getUser();

        $this->params['user'] = $session->getSession('user')['login'] ?: null;
        $this->params['admin'] = $session->getSession('user')['admin'] ?: null;
    }

    public function runAction($action = null)
    {
       
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        }
    }
}
