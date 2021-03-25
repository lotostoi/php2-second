<?php

namespace app\model\entites;
use app\model\Model;

class Technologies extends Model
{
    protected $id;
    protected $title;
    protected $linkToImg;
    protected $order;


    public function __construct($title = null, $linkToImg = null, $order = null)
    {
        parent::__construct();
        $this->title = $title;
        $this->linkToImg = $linkToImg;
        $this->order = $order;
    }
}