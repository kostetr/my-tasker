<?php

namespace core\controllers;

use core\controllers\AbstractController;
use core\models\ModelAuth;
use core\Router;

class Auth extends AbstractController {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelAuth();
        $this->viewer->template = "auth_template.php";
    }

    public function action_index() {
        $this->viewer->content_view = "auth.php";
        $this->viewer->show();
    }

    public function action_register() {        
        $this->model->table = 'gender';
        $this->viewer->gender = $this->model->all();
        $this->model->table = 'posts';
        $this->viewer->posts =$this->model->all();
        $this->viewer->content_view = "register.php";
        $this->viewer->show();
    }

    //Регистрация
    public function action_adduser() {
        $user = filter_input_array(INPUT_POST);
//        $user['referral_link'] = self::generateLink(12);
        
        if ($this->user_validate($user)) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            $this->model->addUser($user);
        }
        Router::redirect('auth/');
    }

    //Авторизация
    public function action_signin() {
        $user = filter_input_array(INPUT_POST);
        $user_login = $user['login'];

        $user_item = $this->model->selectByName($user_login);

        if ($user_item) {
            if (password_verify($user['password'], $user_item->password)) {
                $_SESSION['id'] = $user_item->id;
                $_SESSION['login'] = $user_item->login;
                Router::redirect('tasks/');
            } else {
                Router::redirect('auth/');
            }
        } else {
            Router::redirect('auth/');
        }
    }

    //Проверки
    private function user_validate(array $user) {
        if ($user['password'] !== $user['password_confirm']) {
            return false;
        }
        $user_item = $this->model->selectByName($user['login']);
        if ($user_item) {
            return false;
        }
        $registration_priority = $this->model->selectSecretPass();
        foreach ($registration_priority as $secret_pass) {
            if ($secret_pass['value']==$user['secret_pass']) {
                $user['group']=$secret_pass['id'];
                return true;
            }
        }
    }

    static public function getAuthLogin() {
        if (empty($_SESSION['login'])) {
            return false;
        }
        return $_SESSION['login'];
    }

    //Выход из сессии
    public function action_exit() {
        if (session_destroy()) {

            Router::redirect('auth/');
        }
    }

    //Генерируем referral_link исходя из имени и фамилии
    static function generateLink($length = 12) {
        $user = filter_input_array(INPUT_POST);
        $str = $user['name'] . $user['surname'];
        $numChars = strlen($str);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($str, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

}
