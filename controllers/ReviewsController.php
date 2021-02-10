<?php

namespace app\controllers;

use app\model\repositories\reviews\ReviewsRepository;
use app\engine\App;

class ReviewsController extends Controller
{
    private $countReviews = 2;

    public function actionMain()
    {
        $this->params['reviews'] = App::call()->ReviewsRepository->getLimitRevert(0, $this->countReviews);
        echo $this->render('reviews/reviews', $this->params);
    }
}
