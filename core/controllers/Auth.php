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

    public function action_register($user = null, $arrayErrors = null) {
        $this->model->table = 'gender';
        $this->viewer->gender = $this->model->all();
        $this->model->table = 'posts';
        $this->viewer->posts = $this->model->all();
        $this->viewer->logins = $this->model->selectAllLogins();
        $this->viewer->arrayErrors = $arrayErrors;
        $this->viewer->user = $user;
        $this->viewer->content_view = "register.php";
        $this->viewer->show();
    }

    //Регистрация
    public function action_adduser() {
        $user = filter_input_array(INPUT_POST);
        $this->model->arrayErrors = $this->user_validate($user);
        if (count($this->model->arrayErrors) == 0) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            $this->model->table = 'users';
            $user['group_id'] = $this->model->group_id;
            $birthday = explode('-', $user['birthday']);
            $user['birthday'] = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
            $user['registered'] = date('Y-m-d');
            $this->model->addUser($user);
            Router::redirect('auth/');
        } else {
            $this->action_register($user, $this->model->arrayErrors);
        }
    }

    //Авторизация
    public function action_signin() {
        $user = filter_input_array(INPUT_POST);
        $user_login = $user['login'];

        $user_item = $this->model->selectByName($user_login);

        if ($user_item) {
            if (password_verify($user['password'], $user_item->password)) {
                $_SESSION['id'] = $user_item->id;
                $_SESSION['id_doc'] = $user_item->id_doc;
                $_SESSION['login'] = $user_item->login;
                $_SESSION['surename'] = $user_item->surename;
                $_SESSION['name'] = $user_item->name;
                $_SESSION['patronymic'] = $user_item->patronymic;
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
        $arrayErrors = array();
        if ($user['password'] !== $user['password_confirm']) {
            $arrayErrors['passError']='Пароли не совпадают';
        }
        $user_item = $this->model->selectByName($user['login']);
        if ($user_item) {
            $arrayErrors['loginError']='Пользователь с таким логином существует';
        }
        $this->model->table = 'groups';
        $registration_priority = $this->model->all();
        foreach ($registration_priority as $value) {
            if ($value['secret_pass'] === $user['secret_pass']) {
                $this->model->group_id = $value['id'];
            }
        }
        if ($this->model->group_id == null) {
            $arrayErrors['secretPassError']='Неправильный пароль доступа';
        }
        return $arrayErrors;
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
