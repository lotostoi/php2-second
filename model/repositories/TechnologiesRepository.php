<?php

namespace app\model\repositories;

use app\model\Repository;
use app\model\entites\Technologies;


class TechnologiesRepository extends Repository
{
    public function getEntityClass()
    {
        return Technologies::class;
    }

    public  function getTableName()
    {
        return 'technologies';
    }
}