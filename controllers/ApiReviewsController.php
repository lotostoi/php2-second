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
        foreach (Reviews::getLimitRevert($from, $to) as $obj) {
            $obj['admin'] = $this->params['admin'];
            $obj['accessForEdit'] = $obj['user'] === $this->params['user'];
            $revs[] = $obj;
        }
        echo json_encode($revs);
    }
    public function actionAdd()
    {
        if (!empty($_POST['review'])) {
            $review = new Reviews(
                $this->user['login'],
                $this->user['link_to_sosial_network'],
                $_POST['review'],
                $this->user['img_small'],
                $this->user['admin']
            );
            $review->insert();
            echo json_encode([
                "result" => 'ok',
                'img_small' => $review->img_small,
                'link_network' => $review->link_network,
                'user' => $review->user,
                'review' => $review->review,
                'id' => $review->id,
                'accessForEdit' => $this->user['login'] ===  $review->user,
                'admin' => $review->admin
            ]);
        } else {
            echo json_encode(['error' => "Review is empty!"]);
        }
    }
    public function actionEdit()
    {
        $id = $_POST['id'];
        $textReview = $_POST['review'];
        $review = Reviews::getOne($id);
        $review->review = $textReview;
        $review->update();
        echo json_encode(['result' => 'ok']);
    }
    public function actionDelete()
    {
        $id = $_POST['id'];
        $review = Reviews::getOne($id);
        $review->delete();
        echo json_encode(['result' => 'ok']);
    }
}
