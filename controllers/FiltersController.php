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
    public function actionLimit()
    {
        $from = App::call()->Request->getParams()['limit'];
        $to = $this->countReviews;
        $revs = [];
        foreach (App::call()->ReviewsRepository->getLimitRevert($from, $to) as $obj) {
            $obj['admin'] = $this->params['admin'];
            $obj['accessForEdit'] = $obj['user'] === $this->params['user'];
            $revs[] = $obj;
        }
        echo json_encode($revs);
        die();
    }
}
