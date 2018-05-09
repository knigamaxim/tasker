<?php

namespace core\models;
use core\models\AbstractModel;
use mysqli;

class ModelUsers extends AbstractModel {

    public function __construct() {
	parent::__construct();
	$this->table = 'users';
    }
        public function allUsers() {
        $query = "SELECT * FROM users" ;
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }
}
