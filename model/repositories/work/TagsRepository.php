<?php

namespace app\model\repositories\work;

use app\engine\App;
use app\model\Repository;
use app\model\entites\work\Tags;


class TagsRepository extends Repository
{

    public function getEntityClass()
    {
        return Tags::class;
    }

    public function getTableName()
    {
        return 'tags';
    }

    public function deleteTag()
    {
        $id = App::call()->Request->getParams()['id'];
        $sql = "DELETE FROM tags, works_to_tags USING tags, works_to_tags WHERE tags.id=:id AND works_to_tags.id_tag=:id";
        App::call()->Db->execute($sql, [':id' =>$id]);
        $tag = $this->getOne($id);
        $tag = $this->delete($tag); 
    }
}
