<?php

namespace core\controllers;

use core\models\ModelUsers;
use core\Router;

class Users extends AbstractController {

    public function __construct() {
        if (!Auth::getAuthLogin()) {
            Router::redirect('auth/');
        }
        parent::__construct();
        $this->model = new ModelUsers();
        $this->viewer->template = "main.php";
    }

    public function action_index() {
        $this->viewer->users = $this->model->allUsers();
        $this->viewer->content_view = 'users_index_view.php';
        $this->viewer->show();
    }

}
