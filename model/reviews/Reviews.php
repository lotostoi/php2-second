<?php

namespace app\model\reviews;

use app\model\Model;

class Reviews extends Model
{
    public $id = null;
    public $user = null;
    public $link_to_sosial_network = null;
    public $review = null;
    public $img_small = null;
    public $admin = null;


    public function __construct($user = null, $link_to_sosial_network = null, $review = null, $img_small = null, $admin = null, $tags = null)
    {
        $this->user = $user;
        $this->link_to_sosial_network = $link_to_sosial_network;
        $this->review = $review;
        $this->img_small = $img_small;
        $this->admin = $admin;
    }

    public static function getTableName()
    {
        return 'reviews';
    }
}
