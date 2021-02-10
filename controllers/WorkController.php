<?php

namespace app\controllers;

use app\engine\App;


class WorkController extends Controller
{

    public function actionIndex()
    {
        echo 'index';
    }
    public function actionMain()
    {
        $this->params['tags'] = App::call()->TagsRepository->getAll();
        $this->params['catalog'] = App::call()->WorkRepository->getCatalog();
        $this->params['del'] = App::call()->Request->getParams()['del'];
        echo $this->render('portfolio/portfolio', $this->params);
    }

    public function actionWork()
    {
        $id = App::call()->Request->getParams()['id'];
        $this->params['result'] = App::call()->Request->getParams()['result'];
        $this->params['work'] = App::call()->WorkRepository->getOne($id);
        echo $this->render('portfolio/work', $this->params);
    }

    public function actionAdd()
    {
        App::call()->WorkRepository->addWork();
        $this->params['tags'] = App::call()->WorkRepository->getTagsForParams();
        $this->params['title'] = App::call()->Request->getParams()['title'];
        $this->params['git'] = App::call()->Request->getParams()['git'];
        $this->params['project'] = App::call()->Request->getParams()['project'];
        $this->params['description'] = App::call()->Request->getParams()['description'];
        $this->params['result'] = App::call()->Request->getParams()['result'];
        $this->params['errors'] = App::call()->Session->getSession('errors');
        echo $this->render('portfolio/add', $this->params);
    }

    public function actionLoadImg()
    {
        $file = $_FILES['file'];
        $folder = App::call()->config['STOR_FOR_IMG'];
        App::call()->LoaderImages->clean($file, $folder);
        $link = App::call()->LoaderImages->loadImage($file, $folder);
        echo json_encode(['link' => "/" . $link]);
        die();
    }
}
