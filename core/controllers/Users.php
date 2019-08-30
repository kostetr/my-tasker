<?php

namespace core\controllers;

use core\controllers\AbstractController;
use core\models\UsersModel;
use core\Router;

class Users extends AbstractController {

    public function __construct() {
        if (!Auth::getAuthLogin()) {
            Router::redirect('auth/');
        }
        parent::__construct();
        $this->model = new UsersModel();
    }

    public function action_index() {
//        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = 'content' . DIRECTORY_SEPARATOR . 'users_index_view.php';
        $this->viewer->show();
    }


}
