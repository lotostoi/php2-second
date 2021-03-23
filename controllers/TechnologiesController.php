<?php

namespace app\controllers;

use app\model\entites\reviews\Reviews;
use app\engine\App;
use app\model\entites\Technologies;

class TechnologiesController extends Controller
{

    public function actionAdd()
    {
        $title = App::call()->Request->getParams()['title'];
        $linkToImg = App::call()->Request->getParams()['linkToImg'];
        $folder = App::call()->config['TECHNOLOGIES'] . $title . '.png';

        file_put_contents($folder, $this->file_get_contents_curl($linkToImg));

        if ($title !== '' &&  $linkToImg !== '') {
            $technology = new Technologies(
                $title,
                $folder
            );

            App::call()->TechnologiesRepository->save($technology);

            echo json_encode([
                "result" => 'ok',
                'title' =>  $title,
                'linkToImg' =>  $folder,
                'admin' => $this->user['admin'],
                'id' => $technology->id,
            ]);
            die();
        } else {
            echo json_encode(['error' => "You need to fill fields!"]);
            die();
        }
    }


    public function actionDel()
    {
        $id = App::call()->Request->getParams()['id'];
        $technology = App::call()->TechnologiesRepository->getOne($id);
        App::call()->TechnologiesRepository->delete($technology);
        echo json_encode(['result' => true]);
        die();
    }

    public function file_get_contents_curl($url)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}
