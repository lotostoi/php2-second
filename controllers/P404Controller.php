<?php

namespace app\controllers;

use app\engine\Request;

class P404Controller extends Controller
{
    public function actionMain()
    {
        echo $this->render('p404', ['message' => (new Request())->getRequestString()]);
    }
}
