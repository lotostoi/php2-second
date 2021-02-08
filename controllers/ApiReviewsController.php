<?php

namespace app\controllers;

use app\model\repositories\reviews\ReviewsRepository;
use app\model\entites\reviews\Reviews;
use app\engine\Request;


class ApiReviewsController extends ApiController
{
    private $countReviews = 2;
    public function actionAll()
    {
        echo json_encode((new ReviewsRepository())->getAll());
        die();
    }
    public function actionLimit()
    {
        $from = (new Request())->getParams()['limit'];
        $to = $this->countReviews;
        $revs = [];
        foreach ((new ReviewsRepository())->getLimitRevert($from, $to) as $obj) {
            $obj['admin'] = $this->params['admin'];
            $obj['accessForEdit'] = $obj['user'] === $this->params['user'];
            $revs[] = $obj;
        }
        echo json_encode($revs);
        die();
    }
    public function actionAdd()
    {
        if (!empty($_POST['review'])) {
            $review = new Reviews(
                $this->user['login'],
                $this->user['link_to_sosial_network'],
                $_POST['review'],
                $this->user['img_small'],
                date("Y-m-d"),
                $this->user['admin']
            );

            (new ReviewsRepository())->save($review);

            echo json_encode([
                "result" => 'ok',
                'img_small' => $review->img_small,
                'link_network' => $review->link_network,
                'user' => $review->user,
                'review' => $review->review,
                'date' => $review->date,
                'id' => $review->id,
                'accessForEdit' => $this->user['login'] ===  $review->user,
                'admin' => $review->admin
            ]);
            die();
        } else {
            echo json_encode(['error' => "Review is empty!"]);
            die();
        }
    }
    public function actionEdit()
    {
        $id = (new Request())->getParams()['id'];
        $textReview = (new Request())->getParams()['review'];
        $review = (new ReviewsRepository())->getOne($id);
        $review->review = $textReview;
        (new ReviewsRepository())->save($review);
        echo json_encode(['result' => 'ok']);
        die();
    }
    public function actionDelete()
    {
        $id = (new Request())->getParams()['id'];
        $review = (new ReviewsRepository())->getOne($id);
        (new ReviewsRepository())->delete($review);
        echo json_encode(['result' => 'ok']);
        die();
    }
}
