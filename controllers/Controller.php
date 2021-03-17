<?php

namespace app\controllers;


use app\interfaces\Irender;
use app\engine\App;

class Controller
{
    protected $defaultAction;
    protected $action;
    public $params = [];
    public $authModel = null;
    public $user;
    protected $renderer;

    public function __construct(Irender $renderer)
    {
        $this->defaultAction = 'main';
        $this->authModel = App::call()->UsersRepository;
        $this->user = $this->authModel->getUser();
        $this->params['user'] = App::call()->Session->getSession('user')['login'] ?: null;
        $this->params['admin'] = App::call()->Session->getSession('user')['admin'] ?: null;
        $this->params['year'] = Date('Y');
        $this->renderer = $renderer;
    }
    public function runAction($action = null)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo $this->render('p404', ['message' => App::call()->Request->getRequestString()]);
        }
    }

    public function render($template, $params = [])
    {
        return $this->renderTemplate($template, $params);
    }

    public function renderTemplate($template, $params = [])
    {
        return $this->renderer->renderTemplate($template, $params);
    }
}
