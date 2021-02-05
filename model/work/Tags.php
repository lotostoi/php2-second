<?php

namespace app\model\work;

use app\model\Model;
use app\engine\Db;

class Tags extends Model
{
    protected $id;
    protected $name;

    public function __construct($name = null)
    {
        parent::__construct();
       $this->name=$name; 
    }

    public static function getTableName()
    {
        return 'tags';
    }
}
