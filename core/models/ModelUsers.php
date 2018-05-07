<?php

namespace core\models;
use core\models\AbstractModel;
use mysqli;

class ModelUsers extends AbstractModel {

    public function __construct() {
	parent::__construct();
	$this->table = 'users';
    }
}
