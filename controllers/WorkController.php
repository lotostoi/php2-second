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
        $this->params['folderImg'] = App::call()->config['BIG'];
        echo $this->render('portfolio/portfolio', $this->params);
    }

    public function actionWork()
    {

        echo $this->render('portfolio/work', array_merge(App::call()->WorkRepository->getWork(), $this->params));
    }

    public function actionAdd()
    {
        echo $this->render('portfolio/add', array_merge(App::call()->WorkRepository->addWork(), $this->params));
    }

    public function actionEdit()
    {
        echo $this->render('portfolio/edit',  array_merge(App::call()->WorkRepository->editWork(), $this->params));
    }
    public function actionDelete()
    {
        App::call()->WorkRepository->deleteWork();
    }

    public function actionLoadImg()
    {
        $file = $_FILES['file'];
        $folder = App::call()->config['STOR_FOR_IMG'];
        $link = App::call()->LoaderImages->loadImage($file, $folder);
        echo json_encode(['link' => "/" . $link]);
        die();
    }

    public function actionFilters() {
          echo $this->render('portfolio/filters',  array_merge(App::call()->WorkRepository->editWork(), $this->params));
    }

    public function actionApiAll()
    {
        echo json_encode([
            'result' => 'ok',
            'catalog' => $this->params['catalog'] = App::call()->WorkRepository->getCatalog()
        ]);
        die();
    }
}
