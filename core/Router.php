<?php

namespace core;

use core\controllers;

class Router {

    static public function init() {
        if (array_key_exists('REDIRECT_URL', $_SERVER)) {
            $array_url = explode('/', $_SERVER['REDIRECT_URL']);
            $section = $array_url[1];
            $action = $array_url[2];
// TODO проверить что будит если section будет не Tasks
// TODO Если после $section написать слеш а $action стандартный то слетают стили
            if (empty($action)) {
                $action = 'index';
            }
        } else {
            $section = 'Tasks';
            $action = 'index';
        }


        $section = ucfirst(strtolower($section));
        $section = "\core\controllers\\" . $section;
        $action = strtolower($action);
        $action = 'action_' . $action;

        if (class_exists($section)) {
            $obj = new $section();
            if (method_exists($obj, $action)) {
                $obj->$action();
            } else {
                self::notFoundAction();
            }
        } else {
            self::notFound();
        }
    }

    static public function notFound() {
        header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
        include_once 'template/404.php';
        exit();
    }

    static public function notFoundAction() {
        header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
        include_once 'template/404.php';
        exit();
    }

    static public function root() {
        return $_SERVER[REQUEST_SCHEME] . "://" . $_SERVER[HTTP_HOST];
    }

    static public function redirect($url) {
        header('Location: ' . self::root() . '/' . $url);
        exit();
    }

}
