<?php

namespace app\model\work;

use app\model\Model;
use app\engine\Db;

class Tags extends Model
{
    public $id;
    public $name;

    public function __construct($name = null)
    {
       $this->name=$name; 
    }

    public static function getTableName()
    {
        return 'tags';
    }
}
