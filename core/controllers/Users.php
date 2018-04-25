<?php

class Users extends AbstractController {

    public function __construct() {
	parent::__construct();
	$this->model = new ModelUsers();
	$this->views->template = "main_template.php";
    }

    public function action_index() {
	$this->views->users = $this->model->all();
	$this->views->content_view = 'users.php';
	$this->views->show();
    }

}
