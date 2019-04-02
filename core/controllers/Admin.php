<?php

namespace core\controllers;

use core\controllers\AbstractController;
use core\models\AdminModel;
use core\Router;

class Admin extends AbstractController {

    public function __construct() {
        if (!Auth::getAuthLogin()) {
            Router::redirect('auth/');
        }elseif ($_SESSION['accessLevel']!==200 || $_SESSION['accessLevel']!==100 ) {
            Router::redirect('admin/accessClosed');
        }
        parent::__construct();
        $this->model = new AdminModel();
    }

    public function action_index() {
//        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = 'content' . DIRECTORY_SEPARATOR . 'admin_index_view.php';
        $this->viewer->show();
    }
    public function action_accessClosed() {
        $this->viewer->content_view = 'content' . DIRECTORY_SEPARATOR . 'admin_ access_closed_view.php';
        $this->viewer->show();
    }

}
