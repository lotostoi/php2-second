<?php

namespace app\model\work;
use app\model\Model;
use app\engine\Db;

class WorkToTags extends Model
{
    public $id;
    public $id_work;
    public $id_tag;
  
    public function __construct($id = null, $id_work = null, $id_tag = null, Db $db)
    {   parent::__construct($db); 
        $this->$id = $id;
        $this->id_work = $id_work;
        $this->id_tag = $id_tag;
    }

    public function getTableName()
    {
        return 'works_to_tags';
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
