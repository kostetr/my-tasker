<?php

namespace core\controllers;

use core\controllers\AbstractController;
use core\controllers\Auth;
use core\models\AdminModel;
use core\Router;

class Admin extends AbstractController {

    public function __construct() {
        if (!Auth::getAuthLogin()) {
            Router::redirect('auth/');
        }elseif (!Auth::accessLevel()) {
            Router::redirect('tasks/');
        }
        parent::__construct();
        $this->model = new AdminModel();
    }

    public function action_index() {
//        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = 'content' . DIRECTORY_SEPARATOR . 'admin_index_view.php';
        $this->viewer->show();
    }
}
