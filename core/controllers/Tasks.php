<?php

namespace core\controllers;

use core\models\ModelTasks;
use core\Router;

class Tasks extends AbstractController {

    /**
     * Конструкт для ТАСКС
     */
    public function __construct() {
        if (!Auth::getAuthLogin()) {
            Router::redirect('auth/');
        }
        parent::__construct();
        $this->model = new ModelTasks();
    }

    public function action_index() {
        $this->viewer->tasks = $this->model->new_tasks();
        $this->viewer->content_view = 'tasks_index_view.php';
        $this->viewer->show();
    }

    public function action_inprogress() {
        $this->viewer->tasks = $this->model->all_inprogress();
        $this->viewer->content_view = 'tasks_inprogress_view.php';
        $this->viewer->show();
    }

    public function action_appointed() {
        $this->viewer->tasks = $this->model->appointed();
        $this->viewer->content_view = 'tasks_appointed_view.php';
        $this->viewer->show();
    }

    public function action_archive() {
        $this->viewer->tasks = $this->model->archive();
        $this->viewer->content_view = 'tasks_archive_view.php';
        $this->viewer->show();
    }

    public function action_add() {
        $this->viewer->priority = $this->model->selectPriority();
        $this->viewer->users = $this->model->allUsers();
        $this->viewer->content_view = 'tasks_add_view.php';
        $this->viewer->show();
    }

    public function action_addTask() {
        $task = filter_input_array(INPUT_POST);           
        if ($this->taskValidate($task)) {            
            $this->model->addTask($task);
        }
        Router::redirect('tasks/add');
    }
    public function taskValidate(array $task) {
//        if ($user['password'] !== $user['password_confirm']) {
//            return false;
//        }
//        $user_item = $this->model->selectByName($user['login']);
//        if ($user_item) {
//            return false;
//        }
        return true;    
    }
        public function action_changStatus() {
        $task = filter_input_array(INPUT_POST);
        if (!is_null($task)) {              
            $this->model->changStatus($task['task_id'], $task['status_id']);
        }
        Router::redirect('tasks/');
    }

}
