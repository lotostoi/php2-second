<?php

namespace app\model\repositories;

use app\model\entites\Hashes;
use app\model\Repository;
use app\model\entites\Users;
use app\engine\Request;

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
        $params = (new Request())->getParams();

        if (isset($params['login']) || isset($params['password'])) {
            if (!isset($_SESSION['user'])) {
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
                        session_start();
                        $_SESSION['auth_error'] = "Неверный логин или пароль";
                        header("Location: /authorization/enter");
                        die();
                    }
                } else {
                    session_start();
                    $_SESSION['auth_error'] = "Неверный логин или пароль";
                    header("Location: /authorization/enter");
                    die();
                }
            }
        }
        if (!empty($_SESSION['sn_user'])) {
            // sn_auth();
        }
    }

    public function setCook($user, $save)
    {
        $_SESSION['user'] = $user;
        $id = $user['id'];
        if ($save == 1) {
            $hash = uniqid(rand(), true);
            (new HashesRepository())->save(new Hashes($id, $hash));
            setcookie("hash", "$hash", time() + 60 * 60 * 24 * 30, "/");
        }
    }

    public function getUser()
    {
        if ($_SESSION['user']) {
            return $_SESSION['user'];
        } elseif ($_COOKIE['hash']) {
            $hash = $_COOKIE['hash'];
            $user_id = (array) (new HashesRepository())->getOneByField('hash', $hash);
            $user_id  = $user_id['id_user'];
            if ($user_id) {
                $user = (array) $this->getOne($user_id);
                $_SESSION['user'] = $user;
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
