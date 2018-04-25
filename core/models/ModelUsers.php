<?php

namespace core\models;

use mysqli;

class ModelUsers extends AbstractModel {

    public function __construct() {
	parent::__construct();
	$this->table = 'users';
    }
}
