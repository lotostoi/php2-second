<?php

namespace app\model\entites;
use app\model\Model;

class Hashes extends Model
{
    protected $id;
    protected $id_user;
    protected $hash;

    public function __construct($id_user = null, $hash = null)
    {
        parent::__construct();
        $this->id_user = $id_user;
        $this->hash = $hash;
    }
}
