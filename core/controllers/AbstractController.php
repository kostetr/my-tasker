<?php

namespace core\controllers;

use core\defaulttable;
use core\Views;
use core\Router;

abstract class AbstractController implements defaulttable {

    /**
     * объект предназначенный для сбора верстки
     * @var Views 
     */
    protected $viewer;

    /**
     * объект для работы с данными
     * @var AbstractModel
     */
    protected $model;

    public function __construct() {
        $this->viewer = new Views();
    }

    public function __call($name, $arguments) {
        Router::notFound();
    }

}
