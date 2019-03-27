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
        $_SESSION['Errors']['idDoc']= null;
        $_SESSION['Errors']['pass']= null;
        $_SESSION['Errors']['login']= null;
        $_SESSION['Errors']['secretPass']= null;       
        $this->viewer->content_view = "auth.php";
        $this->viewer->show();
        
    }

    public function action_register() {
        $_SESSION['Errors']['auth']=null;
        $this->model->table = 'gender';
        $this->viewer->gender = $this->model->all();
        $this->model->table = 'posts';
        $this->viewer->posts = $this->model->all();
        $this->viewer->content_view = "register.php";
        $this->viewer->show();
    }

//Регистрация
    public function action_adduser() {
        $user = filter_input_array(INPUT_POST);
        if ($this->user_validate($user)) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            $this->model->table = 'users';
            $user['group_id'] = $this->model->group_id;
            $birthday = explode('-', $user['birthday']);
            $user['birthday'] = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
            $user['registered'] = date('Y-m-d');
            if ($this->model->addUser($user)) {
                $_SESSION['message']['succesRegistr'] = 'Успешная регистрация!';
                Router::redirect('auth/');
            }
        }
        $_SESSION['user'] = $user;
        Router::redirect('auth/register');
    }

//Авторизация
    public function action_signin() {
        $user = filter_input_array(INPUT_POST);
        $user_item = $this->model->selectByName($user['login']);
        if ($user_item) {
            if (password_verify($user['password'], $user_item->password)) {
                $_SESSION['id'] = $user_item->id;
                $_SESSION['id_doc'] = $user_item->id_doc;
                $_SESSION['login'] = $user_item->login;
                $_SESSION['surename'] = $user_item->surename;
                $_SESSION['name'] = $user_item->name;
                $_SESSION['patronymic'] = $user_item->patronymic;
                $_SESSION['authError'] = null;
                Router::redirect('tasks/');
            } else {
                $_SESSION['Errors']['auth'] = 'Вы ввели неверный пароль!';
            }
        } else {
            $_SESSION['Errors']['auth'] = 'Вы ввели неверный пароль!';
        }
        Router::redirect('auth/');
    }

        
//Проверки
    private function user_validate(array $user) {
        if ($user['password'] !== $user['password_confirm']) {
            $_SESSION['Errors']['pass'] = 'Пароли не совпадают';
        } else {
            $_SESSION['Errors']['pass'] = null;
        }
        $user_id_doc = $this->model->selectByID($user['id_doc']);
        if ($user_id_doc) {
            $_SESSION['Errors']['idDoc'] = 'Пользователь с таким id уже существует';
        } else {
            $_SESSION['Errors']['idDoc'] = null;
        }
        $user_item = $this->model->selectByName($user['login']);
        if ($user_item) {
            $_SESSION['Errors']['login'] = 'Пользователь с таким логином существует';
        } else {
            $_SESSION['Errors']['login'] = null;
        }
        $this->model->table = 'groups';
        $registration_priority = $this->model->all();
        foreach ($registration_priority as $value) {
            if ($value['secret_pass'] === $user['secret_pass']) {
                $this->model->group_id = $value['id'];
            }
        }
        if ($this->model->group_id == null) {
            $_SESSION['Errors']['secretPass'] = 'Неправильный пароль доступа';
        } else {
            $_SESSION['Errors']['secretPass'] = null;
        }
        if ($_SESSION['Errors']['pass'] !== null || $_SESSION['Errors']['idDoc'] !== null || $_SESSION['Errors']['login'] !== null || $_SESSION['Errors']['secretPass'] !== null) {
            return FALSE;
        } else {
            return true;
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

}
