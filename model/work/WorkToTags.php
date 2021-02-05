<?php

namespace app\model\work;

use app\model\Model;
use app\engine\Db;

class WorkToTags extends Model
{
    protected $id;
    protected $id_work;
    protected $id_tag;

    public function __construct($id_work = null, $id_tag = null)
    {
        parent::__construct();
        $this->id_work = $id_work;
        $this->id_tag = $id_tag;
    }

    public static function getTableName()
    {
        return 'works_to_tags';
    }

/*     public static function getAll()
    {
        $tableName = static::getTableName();
        $sql = $fieldName && $value ? "SELECT * FROM {$tableName} WHERE `{$fieldName}`={$value}" : "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    } */
}
