<?php

namespace app\model\repositories\work;

use app\model\Repository;
use app\model\entites\work\{Work, WorkToTags};
use app\engine\App;

class WorkRepository extends Repository
{

    public function getEntityClass()
    {
        return Work::class;
    }

    public  function getTableName()
    {
        return 'works';
    }

    public function getCatalog()
    {
        $allWorks = $this->getAll();
        $allTags =  App::call()->TagsRepository->getAll();
        $works_to_tags =  App::call()->WorkToTagsRepository->getAll();

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

    function addWork()
    {
        $err = $this->check_form();
        $title = App::call()->Request->getParams()['title'];
        if (!$err && $title) {
            $title = App::call()->Request->getParams()['title'];
            $git = App::call()->Request->getParams()['git'];
            $project = App::call()->Request->getParams()['project'];
            $description = App::call()->Request->getParams()['description'];
            $link = App::call()->Request->getParams()['linkToImg'];
            $big = App::call()->config['BIG'];
            $small = App::call()->config['SMALL'];

            $img = App::call()->LoaderImages->ResizeImg($link , $big, $small);

            if (!empty($link)) {

                // переписать эту часть после прохождения курса по базам данных;
                // переписать эту часть после прохождения курса по базам данных;
                // переписать эту часть после прохождения курса по базам данных;
                // переписать эту часть после прохождения курса по базам данных;
                // переписать эту часть после прохождения курса по базам данных;


                $work = new Work($title, $img, $git, $project, $description);

                $this->save($work);


                $tags = $this->getTagsChecked();
                $allTags = App::call()->TagsRepository->getAll();

                foreach ($allTags as $tag) {
                    foreach ($tags as $r_tag) {
                        if ($tag['name'] != $r_tag) continue;
                        $workToTags = new WorkToTags($work->id, $tag['id']);
                        App::call()->WorkToTagsRepository->save($workToTags);
                    }
                }
            } else {
                die("File isn't loaded ");
            }
            header("Location: /work/add?result=ok");
            die();
        }
    }

    public function  check_form()
    {
        $errors = [];

        if (!App::call()->Session->getSession('errors')) {
            App::call()->Session->sessionStart();
        }

        if (App::call()->Request->getParams()['start']) {
            $errors['load'] = empty(App::call()->Request->getParams()['linkToImg']);
            $errors['tags'] = count($this->getTagsChecked()) === 0;
            $errors['title'] = empty(App::call()->Request->getParams()['title']);
            $errors['git'] = empty(App::call()->Request->getParams()['git']);
            $errors['project'] = empty(App::call()->Request->getParams()['project']);
            $errors['description'] = empty(App::call()->Request->getParams()['description']);
        }
        App::call()->Session->setSession('errors', $errors);
        $result = false;
        foreach ($errors as $error) {
            if ($error) {
                $result = true;
                break;
            }
        }
        return $result;
    }

    protected function getTagsChecked()
    {
        $tags = [];
        foreach ($_POST as $key => $val) {
            if (strpos($key, '_tag_') !== false) {
                $tags[] = str_replace('_', '.', str_replace('_tag_', '', $key));
            }
        }

        return $tags;
    }

    public function getTagsForParams()
    {
        $tags = App::call()->TagsRepository->getAll();
        $checkedTags = $this->getTagsChecked();
        foreach ($tags as $key => $tag) {
            foreach ($checkedTags as $value) {
                if ($value === $tag['name']) {
                    $tags[$key]['tagForName'] = true;
                }
            }
        }
        return $tags;
    }
}
