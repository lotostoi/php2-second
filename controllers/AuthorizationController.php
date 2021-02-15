<?php

namespace app\controllers;
use app\engine\App;

class AuthorizationController extends Controller
{
    public function actionEnter()
    {
        $this->authModel->toLogout();
        $this->params['error'] = $_SESSION['auth_error'];
        echo $this->render('auth/enter', $this->params);
        $_SESSION['auth_error'] = null;
    }

    public function actionEnterVK()
    {
        App::call()->VK->authVK();
    }
    public function actionEnterFB()
    {
        App::call()->FB->authFB();
    }

    public function actionLogout()
    {
        $this->authModel->toEnter();
        $this->params['full_user'] = $_SESSION['user'];
        echo $this->render('auth/logout',  $this->params);
    }

    public function actionExit()
    {
        $this->authModel->logOut();
    }

    public function actionAuth()
    {
        $this->authModel->auth();
    }
}
