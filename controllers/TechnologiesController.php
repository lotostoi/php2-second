<?php

namespace app\controllers;

use app\model\entites\reviews\Reviews;
use app\engine\App;
use app\model\entites\Technologies;

class TechnologiesController extends Controller
{

    public function actionAdd()
    {
        $title = App::call()->Request->getParams()['title'];
        $order = App::call()->Request->getParams()['order'];

        $file = $_FILES['file'];
        $folder = App::call()->config['TECHNOLOGIES'];
        $link = App::call()->LoaderImages->loadImage($file, $folder, true);

        if ($title !== '' &&  !empty($_FILES['file'])) {
            $technology = new Technologies(
                $title,
                $link,
                $order
            );

            App::call()->TechnologiesRepository->save($technology);

            echo json_encode([
                "result" => 'ok',
                'title' =>  $title,
                'linkToImg' =>  $link,
                'order' => $order,
                'admin' => $this->user['admin'],
                'id' => $technology->id,
            ]);
            die();
        } else {
            echo json_encode(['error' => "You need to fill fields!"]);
            die();
        }
    }

    public function actionEdit()
    {
        $id = App::call()->Request->getParams()['id'];
        $title = App::call()->Request->getParams()['title'];
        $order = App::call()->Request->getParams()['order'];


        $technology = App::call()->TechnologiesRepository->getOne($id);
        $technology->title = $title;
        $technology->order = $order;
        if (!empty($_FILES['file']['name'][0])) {
            $file = $_FILES['file'];
            unlink($technology->linkToImg);
            $folder = App::call()->config['TECHNOLOGIES'];
            $link = App::call()->LoaderImages->loadImage($file, $folder, true);
            $technology->linkToImg = $link;
        }
        App::call()->TechnologiesRepository->save($technology);
        $newList = App::call()->TechnologiesRepository->getAllByField("order");
        echo json_encode($newList);
        die();
    }


    public function actionDel()
    {
        $id = App::call()->Request->getParams()['id'];
        $technology = App::call()->TechnologiesRepository->getOne($id);
        App::call()->TechnologiesRepository->delete($technology);
        if (file_exists($technology->linkToImg)) {
            unlink($technology->linkToImg);
        }
        echo json_encode(['result' => true]);
        die();
    }
}
