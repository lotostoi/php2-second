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

    public function getWork()
    {
        $id = App::call()->Request->getParams()['id'];
        $work = App::call()->WorkRepository->getOne($id);
        $work_to_tags = App::call()->WorkToTagsRepository->getAll();
        $tags = App::call()->TagsRepository->getAll();
        $tagsId = [];

        foreach ($work_to_tags  as $con) {
            if ($con['id_work'] == $id) {
                $tagsId[] = $con['id_tag'];
            }
        }

        $tagsForThisWork = [];
        $tagsForInput = [];

        foreach ($tags as $tag) {
            foreach ($tagsId  as $id) {
                if ($tag['id'] == $id) {
                    $tagsForThisWork[] = $tag;
                    $tagsForInput[] = $tag['name'] . ",";
                }
            }
        }
        $tagsForInput[count($tagsForInput) - 1] = str_replace(',', '.', $tagsForInput[count($tagsForInput) - 1]);

        return [
            'id' => $work->id,
            'title' => $work->title,
            'git' => $work->git,
            'project' => $work->project,
            'description' => $work->description,
            'img_big' => App::call()->config['BIG'] . $work->img,
            'img_small' => App::call()->config['SMALL'] . $work->img,
            'tags' => $tagsForThisWork,
            'tagsForInput' => $tagsForInput,
            'result' => App::call()->Request->getParams()['result']
        ];
    }

    public function addWork()
    {
        if (!empty(App::call()->Request->getParams()['change'])) {
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
                $img = App::call()->LoaderImages->ResizeImg($link, $big, $small);

                if (!empty($link)) {

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
                header("Location: /work?result=ok");
                die();
            }
        } else {
            $params = [];
            $params['tags'] = $this->getTagsForParams();
            $params['title'] = App::call()->Request->getParams()['title'];
            $params['git'] = App::call()->Request->getParams()['git'];
            $params['project'] = App::call()->Request->getParams()['project'];
            $params['description'] = App::call()->Request->getParams()['description'];
            $params['result'] = App::call()->Request->getParams()['result'];
            $params['linkToImg'] = App::call()->Request->getParams()['linkToImg'];
            $params['errors'] = App::call()->Session->getSession('errors');
            return $params;
        }
    }

    public function editWork()
    {
        $id = App::call()->Request->getParams()['id'];
        if (!empty(App::call()->Request->getParams()['change'])) {
            $err = $this->check_form();
            $title = App::call()->Request->getParams()['title'];
            if (!$err && $title) {

                $work = $this->getOne($id);

                $req = App::call()->Request->getParams();

                $flag = false;

                if ($req['title'] != $work->title) {
                    $work->title = $req['title'];
                    $flag = true;
                }
                if ($req['git'] != $work->git) {
                    $work->git = $req['git'];
                    $flag = true;
                }
                if ($req['project'] != $work->project) {
                    $work->project = $req['project'];
                    $flag = true;
                }
                if ($req['description'] != $work->description) {
                    $work->description = $req['description'];
                    $flag = true;
                }

                if ($work->img != explode("/", $req['linkToImg'])[count(explode("/", $req['linkToImg'])) - 1]) {
                    $work->img =  explode("/", $req['linkToImg'])[count(explode("/", $req['linkToImg'])) - 1];
                    $big = App::call()->config['BIG'];
                    $small = App::call()->config['SMALL'];
                    App::call()->LoaderImages->ResizeImg($req['linkToImg'], $big, $small);
                    $flag = true;
                }

                if ($flag) {
                    $this->save($work);
                }

                $checkedTags = $this->getTagsChecked();
                $sql = "DELETE FROM `works_to_tags` WHERE id_work=:id";
                App::call()->Db->execute($sql, [':id' => $work->id]);
                $allTags = App::call()->TagsRepository->getAll();
                foreach ($allTags as $tag) {
                    foreach ($checkedTags as $r_tag) {
                        if ($tag['name'] != $r_tag) continue;
                        $workToTags = new WorkToTags($work->id, $tag['id']);
                        App::call()->WorkToTagsRepository->save($workToTags);
                    }
                }

                header("Location: /work?result=ok");
                die();
            }
        } else {
            $work = $this->getWork($id);
            $params = [];
            $params['tags'] = $this->getTagsForParams();
            $params['title'] = $work['title'];
            $params['git'] = $work['git'];
            $params['project'] = $work['project'];
            $params['description'] = $work['description'];
            $params['result'] = null;
            $params['linkToImg'] = $work['img_big'];
            $params['errors'] = null;
            return $params;
        }
    }

    public function deleteWork()
    {
        $id = App::call()->Request->getParams()['id'];
        $work = $this->getOne($id);
        $sql = "DELETE FROM `works_to_tags` WHERE id_work=:id";
        App::call()->Db->execute($sql, [':id' => $work->id]);
        $this->delete($work);
        header("Location: /work?result=ok");
        die();
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
        $id = App::call()->Request->getParams()['id'];
        if ($id && empty(App::call()->Request->getParams()['change'])) {
            $checkedTags = $this->getWork($id)['tags'];
            foreach ($checkedTags as $tag) {
                $tags[] = $tag['name'];
            }
        } else {
            foreach ($_POST as $key => $val) {
                if (strpos($key, '_tag_') !== false) {
                    $tags[] = str_replace('_', '.', str_replace('_tag_', '', $key));
                }
            }
        }
        return $tags;
    }

    public function getTagsForParams()
    {
        $tags = App::call()->TagsRepository->getAll();
        $checkedTags =  $this->getTagsChecked();
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
