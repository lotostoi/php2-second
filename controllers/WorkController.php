<?php

namespace app\controllers;

use app\model\work\{Work, Tags, WorkToTags};

class WorkController extends Controller
{
  
    public function actionIndex()
    {
        echo 'index';
    }
    public function actionMain()
    {
        echo $this->render('portfolio/portfolio', ['tags' => Tags::getAll(), 'catalog' => $this->getCatalog()]);
    }

    public function actionWork()
    {
        echo 'work';
    }


    private function getCatalog()
    {
        $allWorks = Work::getAll();
        $allTags = Tags::getAll();
        $works_to_tags = WorkToTags::getAll();

        $catalog = [];

        foreach ($allWorks as $work) {
            $id = $work['id'];
            $tags = [];
            foreach ($works_to_tags as $value) {
                if ($id === $value['id_work']) {
                    $tag = null;
                    foreach ($allTags as $v) {
                        if ($v['id'] == $value['id_tag']) $tag = $v;
                    }
                    $tags[] = $tag['name'] . ",";
                }
            }
            $tags[count($tags) - 1] = str_replace(',', '.', $tags[count($tags) - 1]);
            $work['tags'] = $tags;
            $catalog[] = $work;
        }
        return $catalog;
    }
}
