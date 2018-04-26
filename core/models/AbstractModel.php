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

    public function all() {
	$query = "SELECT * FROM " . $this->table;
	$result = $this->db->query($query);
	if ($result) {
	    return $result->fetch_all(MYSQLI_ASSOC);
	}
	return false;
    }
    public function new_tasks() {
	$query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.deadline, users.name as 'user.name' from tasks left outer join tasklist.status on tasks.status_id = status.id LEFT outer join tasklist.priority on tasks.priority_id= priority.id LEFT OUTER join tasklist.users on users.id=tasks.master_id
";
	$result = $this->db->query($query);
	if ($result) {
	    return $result->fetch_all(MYSQLI_ASSOC);
	}
	return false;
    }









}
