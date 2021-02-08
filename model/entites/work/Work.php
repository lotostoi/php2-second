<?php

namespace app\model\entites\work;

use app\model\Model;

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

}
