<?php

namespace app\model\work;

use app\model\Model;
use app\engine\Db;

class Work extends Model
{
    public $id = null;
    public $title = null;
    public $img = null;
    public $git = null;
    public $project = null;
    public $description = null;
    public $tags = null;

    public function __construct($title = null, $img = null, $git = null, $project = null, $description = null, $tags = null)
    {
        $this->title = $title;
        $this->img = $img;
        $this->git = $git;
        $this->project = $project;
        $this->description = $description;
        $this->tags = $tags;
    }

    public static function getOne($id)
    {
        $obj = parent::getOne($id);
        $obj->tags = static::getTags($id);
        return $obj;
    }
    public static function getTableName()
    {
        return 'works';
    }
    private static function getTags($id)
    {
        $obj = parent::getOne($id);
        $workToTags = WorkToTags::getColumn('id_tag', 'id_work', $obj->id);
        return Tags::getColumnIn('name', 'id', $workToTags);
    }
}
