<?php

namespace app\model\work;

use app\model\Model;
use app\engine\Db;

class WorkToTags extends Model
{
    public $id;
    public $id_work;
    public $id_tag;

    public function __construct($id_work = null, $id_tag = null)
    {
        $this->id_work = $id_work;
        $this->id_tag = $id_tag;
    }

    public static function getTableName()
    {
        return 'works_to_tags';
    }
}
