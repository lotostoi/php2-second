<?php

namespace app\model\repositories;

use app\model\entites\Hashes;
use app\model\Repository;
use app\model\entites\Users;
use app\engine\App;

class UsersRepository extends Repository
{

    public function getEntityClass()
    {
        return Users::class;
    }

    public function getTableName()
    {
        return 'users';
    }

    public function auth()
    {
        $params = App::call()->Request->getParams();

        if (isset($params['login']) || isset($params['password'])) {

            if (!isset(App::call()->Session->Session->getSession['user'])) {

                $redirect = $params['redirect'];
                $login = trim(($params['login']));
                $password = $params['password'];
                $save = $params['save'] ? true : "false";
                $user = $this->getOneByField('login', $login);
                $user = $user->id ? $user : $this->getOneByField('email', $login);

                if ($user->showKeys()['id']) {
                    if (password_verify($password, $user->showKeys()['password'])) {
                        $this->setCook($user->showKeys(), $save);
                        header("Location: /$redirect");
                        die();
                    } else {
                        App::call()->Session->sessionStart();
                        App::call()->Session->setSession("auth_error", "Неверный логин или пароль");
                        header("Location: /authorization/enter");
                        die();
                    }
                } else {
                    App::call()->Session->sessionStart();
                    App::call()->Session->setSession("auth_error", "Неверный логин или пароль");
                    header("Location: /authorization/enter");
                    die();
                }
            }
        }
    }

    public function setCook($user, $save)
    {
        App::call()->Session->setSession("user", $user);
        $id = $user['id'];
        if ($save == 1) {
            $hash = uniqid(rand(), true);
            App::call()->HashesRepository->save(new Hashes($id, $hash));
            setcookie("hash", "$hash", time() + 60 * 60 * 24 * 30, "/");
        }
    }

    public function getUser()
    {
        if (App::call()->Session->getSession('user')) {
            return App::call()->Session->getSession('user');
        } elseif ($_COOKIE['hash']) {
            $hash = $_COOKIE['hash'];
            $user_id = App::call()->HashesRepository->getOneByField('hash', $hash);
            $user_id  = $user_id->id_user;
            if ($user_id) {
                $user = $this->getOne($user_id)->showKeys();
                App::call()->Session->setSession('user', $user);
                return $user;
            }
        }
        return false;
    }



    public function logOut()
    {
        session_destroy();
        setcookie("hash", "", -1, "/");
        header("Location: /authorization/enter");
    }

    public function isAccessUser()
    {
        return $this->getUser()['admin'];
    }

    public function toLogout()
    {
        if ($this->getUser()) {
            header("Location: /authorization/logout");
            die();
        }
    }

    public function toEnter()
    {
        if (!$this->getUser()) {
            header("Location: /authorization/enter");
            die();
        }
    }

    public function blockedPage()
    {
        if (!$this->isAccessUser()) {
            if ($this->getUser()) {
                header("Location: /authorization/logout");
                die();
            } else {
                header("Location: /authorization/enter");
                die();
            }
        }
    }
}
