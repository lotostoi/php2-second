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

    public function __construct($title = null, $img = null, $git = null, $project = null, $description = null)
    {
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

}
