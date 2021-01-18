<?php

namespace app\model\work;
use app\model\Model;
use app\engine\Db;

class Work extends Model
{
    public $id;
    public $title;
    public $img;
    public $git;
    public $project;
    public $description;
    public $tags; // сдесь должен быть набор тегов из таблици тегов у которых id работы совподает с этой и пока непонимаю как используя паттерн АктивРекорд сделать это правильно

    public function __construct($id = null, $title = null, $img = null, $git = null, $project = null, $description = null, $tags = null, Db $db)
    {   parent::__construct($db); 
        $this->$id = $id;
        $this->title = $title;
        $this->img = $img;
        $this->git = $git;
        $this->project = $project;
        $this->description = $description;
        $this->tags = $tags;
    }

    public function getTableName()
    {
        return 'works';
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
