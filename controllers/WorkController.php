<?php

namespace app\controllers;

use app\engine\Request;
use app\model\repositories\work\TagsRepository;
use app\model\repositories\work\WorkRepository;

class WorkController extends Controller
{

    public function actionIndex()
    {
        echo 'index';
    }
    public function actionMain()
    {
        $this->params['tags'] = (new TagsRepository())->getAll();
        $this->params['catalog'] = (new WorkRepository())->getCatalog();
        $this->params['del'] = (new Request())->getParams()['del'];
        echo $this->render('portfolio/portfolio', $this->params);
    }

    public function actionWork()
    {
        echo 'work';
    }
}
