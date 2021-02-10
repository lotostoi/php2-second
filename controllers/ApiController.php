<?php

namespace app\controllers;
use app\engine\App;
class ApiController
{

    protected $action;
    protected $defaultAction = 'all';
    public $params = [];
    public $authModel = null;
    public $user;

    public function __construct()
    {
        $this->authModel = App::call()->UsersRepository;
        $this->user = $this->authModel->getUser();
        $this->params['user'] = App::call()->Session->getSession('user')['login'] ?: null;
        $this->params['admin'] = App::call()->Session->getSession('user')['admin'] ?: null;
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
