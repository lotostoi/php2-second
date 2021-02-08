<?php

namespace app\model\repositories\work;

use app\model\Repository;
use app\model\entites\work\WorkToTags;


class WorkToTagsRepository extends Repository
{

    public function getEntityClass()
    {
        return WorkToTags::class;
    }

    public function getTableName()
    {
        return 'works_to_tags';
    }
}
