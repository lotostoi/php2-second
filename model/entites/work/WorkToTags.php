<?php

namespace app\model\entites\work;

use app\model\Model;


class WorkToTags extends Model
{
    protected $id;
    protected $id_work;
    protected $id_tag;

    public function __construct($id_work = null, $id_tag = null)
    {
        parent::__construct();
        $this->id_work = $id_work;
        $this->id_tag = $id_tag;
    }

}
