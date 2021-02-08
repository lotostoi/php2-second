<?php

namespace app\model\entites\work;

use app\model\Model;


class Tags extends Model
{
    protected $id;
    protected $name;

    public function __construct($name = null)
    {
        parent::__construct();
        $this->name = $name;
    }
}
