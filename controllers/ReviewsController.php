<?php
namespace app\controllers;
use app\model\reviews\Reviews;

class ReviewsController extends Controller
{
  
    public function actionMain()
    {
        echo $this->render('reviews/reviews', ['reviews'=> Reviews::getall()]);
    }
     
} 