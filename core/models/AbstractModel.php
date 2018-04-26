<?php

namespace core\models;

use mysqli;

abstract class AbstractModel {


    /**
     *
     * @var mysqli
     */
    protected $db;

    /**
     *
     * @var string 
     */
    public $table;

    public function __construct() {
	$this->db = new mysqli('localhost', 'root', 'Px24r49', 'tasklist');
    }

    

}
