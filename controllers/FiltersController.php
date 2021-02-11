<?php

namespace app\controllers;

use app\model\entites\work\Tags;
use app\engine\App;

class FiltersController extends Controller
{
    public function actionAdd()
    {
        $tag = App::call()->Request->getParams()['tag'];

        if (empty($tag)) {
            echo json_encode([
                'error' => 'Назавние тега не может быть пустым...'
            ]);
            die();
        }

        $findTag = App::call()->TagsRepository->getOneByField('name', $tag);
        if ($findTag) {
            echo json_encode([
                'error' => 'Тег с таким название уже существует...'
            ]);
            die();
        }

        $objTag = new Tags($tag);
        App::call()->TagsRepository->save($objTag);
        if ($objTag->id) {
            echo json_encode([
                'result' => 'ok',
                'id' => $objTag->id
            ]);
            die();
        }
    }

    public function actionDel()
    {
        App::call()->TagsRepository->deleteTag();
        echo json_encode(['result' => 'ok',]);
        die();
    }
    public function actionEdit()
    {
        $id = App::call()->Request->getParams()['id'];
        $tag = App::call()->Request->getParams()['tag'];
        $objTag = App::call()->TagsRepository->getOne($id);
        $objTag->name = $tag;
        App::call()->TagsRepository->save($objTag);
        echo json_encode(['result' => 'ok',]);
        die();
    }
}
