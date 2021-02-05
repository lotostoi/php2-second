<?php

namespace app\model\work;

use app\model\Model;
use app\engine\Db;

class Work extends Model
{
    protected $id = null;
    protected $title = null;
    protected $img = null;
    protected $git = null;
    protected $project = null;
    protected $description = null;
    protected $tags = null;

    public function __construct($title = null, $img = null, $git = null, $project = null, $description = null)
    {
        parent::__construct();
        $this->title = $title;
        $this->img = $img;
        $this->git = $git;
        $this->project = $project;
        $this->description = $description;
    }

    public static function getTableName()
    {
        return 'works';
    }

    public static function getOne($id)
    {
       
        $sql = "SELECT id_tag FROM `works_to_tags` WHERE `id_work` = :id";
        return Db::getInstance()->queryAll($sql, ['id' => $id]);
    }


}
