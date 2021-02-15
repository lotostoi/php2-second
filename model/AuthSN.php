<?php

namespace app\model;
use app\engine\App;
use app\model\entites\Users;

abstract class AuthSN {
    protected $id;
    protected $sicret_key;
    protected $redirect;

    public function __construct($id = null, $sicret_key = null, $redirect = null)
    {
        $this->id = $id;
        $this->sicret_key = $sicret_key;
        $this->redirect = $redirect;
    }

    public function auth($params) {

        extract($params);
        $req = App::call()->Request->getParams();
        $ses = App::call()->Session;
        $user = App::call()->UsersRepository->getOneAnd('sosial_network', $sosial_network, 'id_in_sosial_network', $id_in_sosial_network);
        if ($user) {
            App::call()->UsersRepository->setCook($user->showKeys(), $save);
            $ses->setSession('sn_user', null);
            $ses->setSession('save_sn', null);
            header("Location: /$redirect");
            die();
        } else {
            $nameImg =  $sosial_network . $id_in_sosial_network . ".jpg";
            $linkForBigImg = App::call()->config['USER_BIG'] . $nameImg;
            $linkForSmallImg = App::call()->config['USER_SMALL'] . $nameImg;
            file_put_contents($linkForBigImg, file_get_contents($img_big));
            file_put_contents($linkForSmallImg, file_get_contents($img_small));
            $img_big = '/' . $linkForBigImg;
            $img_small = '/' . $linkForSmallImg;
            
            $user = new Users(
                $login,
                $first_name,
                $last_name,
                $img_small,
                $img_big,
                $sosial_network,
                $id_in_sosial_network,
                $link_to_sosial_network,
                $email,
                $password,
                $admin
            );
            App::call()->UsersRepository->save($user);
            App::call()->UsersRepository->setCook($user->showKeys(), $save);
            $ses->setSession('sn_user', null);
            $ses->setSession('save_sn', null);
            header("Location: /$redirect");
            die();
        }
    }

}