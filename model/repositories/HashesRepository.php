<?php

namespace app\model\repositories;

use app\model\Repository;
use app\model\entites\Hashes;


class HashesRepository extends Repository
{
    public function getEntityClass()
    {
        return Hashes::class;
    }

    public  function getTableName()
    {
        return 'hashes';
    }
}
