<?php

namespace app\model;

use app\engine\App;
use app\model\entites\Users;

class VK extends AuthSN
{
    public function authVK()
    {
        $req = App::call()->Request->getParams();
        $ses = App::call()->Session;

        $ses->setSession('save_sn', $ses->getSession('save_sn') ?: $req['save_sn']);
        $ses->setSession('redirect', $req['redirect'] ?: $ses->getSession('redirect'));

        $link_for_redirect = $this->redirect;
        $id_vk = $this->id;
        $vk_sicret_key = $this->sicret_key;
        $link_for_code = "https://oauth.vk.com/authorize?client_id={$id_vk}&display=page&redirect_uri={$link_for_redirect}&scope=friends&response_type=code&v=5.126";
        if ($req['start'] == 1) {
            header("Location: {$link_for_code}");
            die();
        }
        if ($req['code']) {
            $code = $req['code'];
            $link_for_token = "https://oauth.vk.com/access_token?client_id=$id_vk&client_secret=$vk_sicret_key&redirect_uri=$link_for_redirect&code=$code";
            $token = json_decode(file_get_contents($link_for_token), true);
            $user_id = $token['user_id'];
            $access_token = $token['access_token'];
            $user = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_id=$user_id&access_token=$access_token&fields=id,nickname,first_name,last_name,photo_100,photo_max_orig&v=5.52"), true);
            $_user = $user['response'][0];

            $params['redirect'] = $ses->getSession('redirect');
            $params['save'] = $ses->getSession('save_sn');
            $params['login'] =  $_user['nickname'] != '' ?  $_user['nickname'] :  $_user['first_name'];
            $params['first_name'] = $_user['first_name'];
            $params['last_name'] = $_user['last_name'];
            $params['img_small'] = $_user['photo_100'];
            $params['img_big'] = $_user['photo_max_orig'];
            $params['sosial_network'] = 'vk';
            $params['id_in_sosial_network'] = $_user['id'];
            $params['link_to_sosial_network'] = 'https://vk.com/id' . $_user['id'];
            $params['email'] = 'не указан';
            $params['password'] = '';
            $params['admin'] = 0;
            
            $this->auth($params);    

        } else {
            die("Error - VK");
        }
    }
}
