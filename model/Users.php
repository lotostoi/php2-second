<?php

namespace app\model;

class Users extends Model
{
    public $id;
    public $login;
    public $first_name;
    public $last_name;
    public $img_small;
    public $img_big;
    public $sosial_network;
    public $id_in_sosial_network;
    public $link_to_sosial_network;
    public $email;
    public $password;
    public $admin;

    public function __construct(
        $id = null,
        $login = null,
        $first_name = null,
        $last_name = null,
        $img_small = null,
        $img_big = null,
        $sosial_network = null,
        $id_in_sosial_network = null,
        $link_to_sosial_network = null,
        $email = null,
        $password = null,
        $admin = null
    ) {
        $this->id = $id;
        $this->login = $login;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->img_small = $img_small;
        $this->img_big = $img_big;
        $this->sosial_network = $sosial_network;
        $this->id_in_sosial_network = $id_in_sosial_network;
        $this->link_to_sosial_network = $link_to_sosial_network;
        $this->email = $email;
        $this->password = $password;
        $this->admin = $admin;
    }

    public static function getTableName()
    {
        return 'users';
    }
}
