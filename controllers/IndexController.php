<?php

namespace app\controllers;


class IndexController extends Controller
{
  
    public function actionMain()
    {
        echo $this->render('index', []);
    }
     
}
