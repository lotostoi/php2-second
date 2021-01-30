<?php

namespace app\controllers;

use app\model\reviews\Reviews;

class ApiReviewsController extends ApiController
{
    private $countReviews = 2;
    public function actionAll()
    {
        echo json_encode(Reviews::getAll());
    }
    public function actionLimit()
    {
        $from = $_GET['limit'];
        $to = $this->countReviews;
        $revs = [];
        foreach (Reviews::getLimit($from, $to) as $obj) {
            $obj['admin'] = $this->params['admin'];
            $obj['accessForEdit'] = $obj['user'] === $this->params['user'];
            $revs[] = $obj;
        }
        echo json_encode($revs);
    }
}
