<?php

namespace core\controllers;

use core\controllers\AbstractController;
use core\models\TasksModel;
use core\Router;

class Tasks extends AbstractController {

    public function __construct() {
        parent::__construct();
        $this->model = new TasksModel();
    }

    public function action_index() {
//        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = '\content\tasks_index_view.php';
        $this->viewer->show();
    }
    public function action_progress() {
//        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = '\content\tasks_progress_view.php';
        $this->viewer->show();
    }
    public function action_archive() {
//        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = '\content\tasks_archive_view.php';
        $this->viewer->show();
    }

}
