<?php

namespace app\model;

use app\engine\App;
use app\model\entites\Users;

class FB extends AuthSN
{
    public function authFB()
    {
        $req = App::call()->Request->getParams();
        $ses = App::call()->Session;

        $ses->setSession('save_sn', $ses->getSession('save_sn') ?: $req['save_sn']);
        $ses->setSession('redirect', $req['redirect'] ?: $ses->getSession('redirect'));

        $link_for_redirect = $this->redirect;
        $id_fb = $this->id;
        $fb_sicret_key = $this->sicret_key;
        $link_for_code = "https://www.facebook.com/v9.0/dialog/oauth?client_id={$id_fb}&redirect_uri={$link_for_redirect}&response_type=code&scope=email&state=tdtdtsdasydgjdbasdbasyub";
        if ($req['start'] == 1) {
            header("Location: {$link_for_code}");
            die();
        }
        if ($req['code']) {
            $code = $req['code'];
            $link_for_token = "https://graph.facebook.com/v9.0/oauth/access_token?client_id={$id_fb}&redirect_uri={$link_for_redirect}&client_secret={$fb_sicret_key}&code={$code}";
            $token = json_decode(file_get_contents($link_for_token), true);
            $access_token = $token['access_token'];
            $id_user = json_decode(file_get_contents("https://graph.facebook.com/me?fields=id,name,email&access_token=$access_token"), true);
            $id = $id_user['id'];
           
            $params['redirect'] = $ses->getSession('redirect');
            $params['save'] = $ses->getSession('save_sn');
            $params['login'] =  explode(" ", $id_user['name'])[0];
            $params['first_name'] = explode(" ", $id_user['name'])[0];
            $params['last_name'] =explode(" ", $id_user['name'])[1];
            $params['img_small'] = "https://graph.facebook.com/" . $id . "/picture?width=100";
            $params['img_big'] = "https://graph.facebook.com/" . $id . "/picture?width=300";
            $params['sosial_network'] = "fb";
            $params['id_in_sosial_network'] = $id;
            $params['link_to_sosial_network'] = "https://facebook.com/" . $id;
            $params['email'] =  $id_user['email'];
            $params['password'] = '';
            $params['admin'] = 0;

            $this->auth($params);
        } else {
            die("Error - VK");
        }
    }
}
