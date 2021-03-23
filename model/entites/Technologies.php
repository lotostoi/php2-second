<?php

namespace app\model\entites;
use app\model\Model;

class Technologies extends Model
{
    protected $id;
    protected $title;
    protected $linkToImg;

    public function __construct($title = null, $linkToImg = null)
    {
        parent::__construct();
        $this->title = $title;
        $this->linkToImg = $linkToImg;
    }
}