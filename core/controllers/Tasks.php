<?php

namespace core\controllers;
use core\models\ModelTasks;
use core\Router;


class Tasks extends AbstractController{
    
    /**
     * Конструкт для ТАСКС
     */
    
     public function __construct() {
        parent::__construct();
        $this->model = new ModelTasks();
     }
    
      public function action_index() {
        $this->viewer->tasks = $this->model->all();
        $this->viewer->content_view = 'tasks_index_view.php';
        $this->viewer->show();
    }
      public function action_appointed() {
        $this->viewer->tasks = $this->model->appointed();
        $this->viewer->content_view = 'tasks_index_view.php';
        $this->viewer->show();
    }
      public function action_archive() {
        $this->viewer->tasks = $this->model->archive();
        $this->viewer->content_view = 'tasks_index_view.php';
        $this->viewer->show();
    }
      public function action_add() {
        $this->viewer->tasks = $this->model->add();
        $this->viewer->content_view = 'tasks_add_view.php';
        $this->viewer->show();
    }
    
}
