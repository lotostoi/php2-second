<?php

namespace app\model;

class AuthorizationModel
{
    public function auth()
    {
        if (isset($_POST['login']) || isset($_POST['password'])) {
            if (!isset($_SESSION['user'])) {
                $redirect = $_POST['redirect'];
                $login = trim(($_POST['login']));
                $password = $_POST['password'];
                $save = $_POST['save'] ? true : "false";
                $user = Users::getOneByField('login', $login);
                $user = $user ? $user : Users::getOneByField('email', $login);
                $user = (array) $user;
                if ($user['id']) {
                    if (password_verify($password, $user['password'])) {
                        $this->setCook($user, $save);
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
            sn_auth();
        }
    }

    public function setCook($user, $save)
    {
        $_SESSION['user'] = $user;
        $id = $user['id'];
        if ($save == 1) {
            $hash = uniqid(rand(), true);
            $newHash = new Hashes($id, $hash);
            $newHash->insert();
            setcookie("hash", "$hash", time() + 60 * 60 * 24 * 30, "/");
        }
    }

    public function getUser()
    {
        if ($_SESSION['user']) {
            return $_SESSION['user'];
        } elseif ($_COOKIE['hash']) {
            $hash = $_COOKIE['hash'];
            $user_id = (array) Hashes::getOneByField('hash', $hash);
            $user_id  = $user_id['id_user'];
            if ($user_id) {
                $user = (array) Users::getOne($user_id);
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
        if (!isAccessUser()) {
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
