<?php

namespace app\controllers;

use app\model\reviews\Reviews;

class ReviewsController extends Controller
{
    private $countReviews = 2;

    public function actionMain()
    {
        $this->params['reviews'] = Reviews::getLimit(0, $this->countReviews);
        echo $this->render('reviews/reviews', $this->params);
    }
}
