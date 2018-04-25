<?php

namespace core\controllers;
use core\models\ModelTasks;

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
}
