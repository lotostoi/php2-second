<?php

namespace app\controllers;

use app\model\entites\reviews\Reviews;
use app\engine\App;

class ReviewsController extends Controller
{

    public function actionMain()
    {
        $this->params['reviews'] = App::call()->ReviewsRepository->getLimitRevert(0, App::call()->config['AMOUNT_REVIEVS']);
        $this->params['amount'] = App::call()->config['AMOUNT_REVIEVS'];
        echo $this->render('reviews/reviews', $this->params);
    }

    public function actionAll()
    {
        echo json_encode(App::call()->ReviewsRepository->getAll());
        die();
    }
    public function actionLimit()
    {
        $from = App::call()->Request->getParams()['limit'];
        $to = App::call()->config['AMOUNT_REVIEVS'];
        $revs = [];
        foreach (App::call()->ReviewsRepository->getLimitRevert($from, $to) as $obj) {
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

            App::call()->ReviewsRepository->save($review);

            App::call()->Email->reviewWasAdded('lotos_toi@mail.ru', $review->review, $review->user);
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
        $id = App::call()->Request->getParams()['id'];
        $textReview = App::call()->Request->getParams()['review'];
        $review = App::call()->ReviewsRepository->getOne($id);
        $review->review = $textReview;
        App::call()->ReviewsRepository->save($review);
        echo json_encode(['result' => 'ok']);
        die();
    }
    public function actionDelete()
    {
        $id = App::call()->Request->getParams()['id'];
        $review = App::call()->ReviewsRepository->getOne($id);
        App::call()->ReviewsRepository->delete($review);
        echo json_encode(['result' => 'ok']);
        die();
    }
}
