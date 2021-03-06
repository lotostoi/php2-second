<?php

namespace app\model\entites\reviews;

use app\model\Model;

class Reviews extends Model
{
    protected $id = null;
    protected $user = null;
    protected $link_to_sosial_network = null;
    protected $review = null;
    protected $img_small = null;
    protected $date = null;
    protected $admin = null;


    public function __construct($user = null, $link_to_sosial_network = null, $review = null, $img_small = null, $date = null, $admin = null)
    {
        parent::__construct();
        $this->user = $user;
        $this->link_to_sosial_network = $link_to_sosial_network;
        $this->review = $review;
        $this->img_small = $img_small;
        $this->date = $date;
        $this->admin = $admin;
    }

 
}
