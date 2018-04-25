<?php


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
	$this->db = new mysqli('localhost', 'root', '', 'tasklist');
    }

    public function all() {
	$query = "SELECT * FROM " . $this->table;
	$result = $this->db->query($query);
	if ($result) {
	    return $result->fetch_all(MYSQLI_ASSOC);
	}
	return false;
    }
}
