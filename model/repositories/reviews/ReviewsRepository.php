<?php

namespace app\model\repositories\reviews;

use app\model\Repository;
use app\model\entites\reviews\Reviews;

class ReviewsRepository extends Repository
{

    public function getEntityClass()
    {
        return Reviews::class;
    }

    public  function getTableName()

    {  
        return 'reviews';
    }
}
