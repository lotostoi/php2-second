<?php

namespace app\model\work;
use app\model\Model;
use app\engine\Db;

class Tags extends Model
{
    public $id;
    public $name;
    public function __construct($id = null, $name = null,  Db $db)
    {   parent::__construct($db); 
        $this->id = $id;
        $this->name = $name;
    }

    public function getTableName()
    {
        return 'tags';
    }

    public function create()
    {
    }
    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }

}
