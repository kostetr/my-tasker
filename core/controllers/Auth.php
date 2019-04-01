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

    /*
     * Главная страница авторизации
     */

    public function action_index() {
        // обнуляем переменные с ошибками регистрации
        
        $_SESSION['Errors']['registr'] = null;
//        $_SESSION['Errors']['idDoc'] = null;
//        $_SESSION['Errors']['pass'] = null;
//        $_SESSION['Errors']['login'] = null;
//        $_SESSION['Errors']['secretPass'] = null;
        // Указываем имя файла содержащего контент и отображаем.96
        $this->viewer->content_view = "auth.php";
        $this->viewer->show();
    }

    /*
     * Страница регистрации
     */

    public function action_register() {
        //обнуляем переменные с ошибками аунтификации.
        $_SESSION['Errors']['auth'] = null;
        //Делаем выбор с бд gender для отображения в select 
        $this->model->table = 'gender';
        $this->viewer->gender = $this->model->all();
        //Делаем выбор с бд posts для отображения в select 
        $this->model->table = 'posts';
        $this->viewer->posts = $this->model->all();
        // Указываем имя файла содержащего контент и отображаем.
        $this->viewer->content_view = "register.php";
        $this->viewer->show();
    }

    /*
     * Запись пользователя в БД 
     */

    public function action_adduser() {
        // Записываем в массив значения полей регистрационной формы.
        $user = filter_input_array(INPUT_POST);
        // Валидация массива переменных
        if ($this->user_validate($user)) {
            //Шифрование пароля
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            //Запись в массив group_id. Переменная определяет к какой группе будет относиться пользователь (Админ, рут, юзер...)            
            $user['group_id'] = $this->model->group_id;
            //Работа с датой рождения. Меняем формат на Y-m-d
            $birthday = explode('-', $user['birthday']);
            $user['birthday'] = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
            // Дата регистрации пользователя
            $user['registered'] = date('Y-m-d');
            // Меняем таблицу на users и записываем в БД
            $this->model->table = 'users';
            if ($this->model->addUser($user)) {
                // Если успешно то в сессии записываем сообщение об успехе и редиректимся на главную страницу Авторизации где будет отображено сообщение.
                $_SESSION['message']['succesRegistr'] = 'Успешная регистрация!';
                Router::redirect('auth/');
            }
        }
        // Если валидация не пройдена то в сессию записывается массив $user содержащий заполненые поля регистрационной формы.
        //  Чтобы повторно пользователь не заполнял а просто исправил ошибки. И редирект на страницу регистрации 
        $_SESSION['user'] = $user;
        Router::redirect('auth/register');
    }

//Авторизация
    public function action_signin() {
        $user = filter_input_array(INPUT_POST);
        $user_item = $this->model->selectByLogin($user['login']);
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

/*
 * Валидация регистрационных данных
 */
    private function user_validate(array $user) {
        //Если пароли введены в два поля не одинаковые то в сессию записываем ошибку. 
        //Если одинаковые то null.
        if ($user['password'] !== $user['password_confirm']) {
            $_SESSION['Errors']['registr']['pass'] = 'Пароли не совпадают';
        } else {
            $_SESSION['Errors']['registr']['pass'] = null;
        }
        // Проверка существует ли в БД пользователь с таким же Табельным. 
        // Если да то записываем ошибку в сессию. 
        // Если нет то null.
        $user_id_doc = $this->model->selectByID($user['id_doc']);
        if ($user_id_doc) {
            $_SESSION['Errors']['registr']['idDoc'] = 'Пользователь с таким id уже существует';
        } else {
            $_SESSION['Errors']['registr']['idDoc'] = null;
        }
        // Проверка существует ли в БД пользователь с таким же Логином. 
        // Если да то записываем ошибку в сессию. 
        // Если нет то null.
        $user_item = $this->model->selectByLogin($user['login']);
        if ($user_item) {
            $_SESSION['Errors']['registr']['login'] = 'Пользователь с таким логином существует';
        } else {
            $_SESSION['Errors']['registr']['login'] = null;
        }
        // Сохраняем в переменную массив с таблици groups из БД. 
        // Перебераем массив и сверяем его с secret_pass (Паролей несколько, они определяют уровень доступа пользователей) 
        // Если введенный пароль совпадает с паролем в БД. 
        // id группы записываем в переменную    
        $this->model->table = 'groups';
        $registration_priority = $this->model->all();
        foreach ($registration_priority as $value) {
            if ($value['secret_pass'] === $user['secret_pass']) {
                $this->model->group_id = $value['id'];
            }
        }
        // ПРоверка. Если id группы пустое (null) значит введенный пароль (определяющий уровень доступа пользователей) не совпадает. 
        // Мы записываем в таком случае ошибку в сессию.
        //  Если id группы не равна null то в сессию к ошибкам записываем null
        if ($this->model->group_id == null) {
            $_SESSION['Errors']['registr']['secretPass'] = 'Неправильный пароль доступа';
        } else {
            $_SESSION['Errors']['registr']['secretPass'] = null;
        }
        // Если одна из переменных массива ошибок будет не равна Null то ретурним False и валидация будет не пройдена.
        if ($_SESSION['Errors']['registr']['pass'] !== null || $_SESSION['Errors']['registr']['idDoc'] !== null || $_SESSION['Errors']['registr']['login'] !== null || $_SESSION['Errors']['registr']['secretPass'] !== null) {
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
