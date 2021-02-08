<?php

namespace app\model\repositories\work;

use app\model\Repository;
use app\model\entites\work\Work;
use app\engine\Db;

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

    public  function getOne($id)
    {

        $sql = "SELECT id_tag FROM `works_to_tags` WHERE `id_work` = :id";
        return Db::getInstance()->queryAll($sql, ['id' => $id]);
    }

    public function getCatalog()
    {
        $allWorks = $this->getAll();
        $allTags = (new TagsRepository())->getAll();
        $works_to_tags = (new WorkToTagsRepository())->getAll();

        $catalog = [];
        // Олег подскажи куда можно вынести эту часть кода?
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
