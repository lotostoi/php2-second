<?php
namespace app\model;

use app\model\Model;


class Hashes extends Model
{
    public $id;
    public $id_user;
    public $hash;

    public function __construct($id_user = null, $hash = null)
    {
        $this->id_user = $id_user;
        $this->hash = $hash;
    }

    public static function getTableName()
    {
        return 'hashes';
    }
}
