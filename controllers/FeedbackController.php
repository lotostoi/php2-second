<?php

namespace app\controllers;

use app\model\entites\reviews\Reviews;
use app\engine\App;

class FeedbackController extends Controller
{
 
    public function actionSend()
    {
       App::call()->Email->send();
    }
}