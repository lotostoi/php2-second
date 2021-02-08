<?php

namespace app\model\repositories\work;

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
}
