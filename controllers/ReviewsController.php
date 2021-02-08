<?php

namespace app\controllers;

use app\model\repositories\reviews\ReviewsRepository;

class ReviewsController extends Controller
{
    private $countReviews = 2;

    public function actionMain()
    {
        $this->params['reviews'] = (new ReviewsRepository())->getLimitRevert(0, $this->countReviews);
        echo $this->render('reviews/reviews', $this->params);
    }
}
