<?php

namespace core\models;

/**
 * класс для работы с ТАSKS-заданиями
 */
class ModelTasks extends AbstractModel {

    public function __construct() {
        parent::__construct();
        /**
         * работаем с табл tasks нашей БД
         */
        $this->table = 'tasks';
    }

    public function all_inprogress() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.add_date, tasks.deadline, users.login as 'users.login', tasks.user_id from " . $this->table . " inner join tasklist.status on tasks.status_id = status.id inner join tasklist.priority on tasks.priority_id= priority.id inner join tasklist.users on users.id=tasks.master_id where status_id=2 and tasks.user_id='" . $_SESSION['id'] . "';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function new_tasks() {
        $query = "select tasks.id, tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.add_date, tasks.deadline, users.login as 'users.login', tasks.user_id from " . $this->table . " inner join tasklist.status on tasks.status_id = status.id inner join tasklist.priority on tasks.priority_id= priority.id inner join tasklist.users on users.id=tasks.master_id where status_id=1 and tasks.user_id='" . $_SESSION['id'] . "';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function archive() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.add_date, tasks.deadline, users.login as 'users.login', tasks.user_id, tasks.end_date from " . $this->table . " inner join tasklist.status on tasks.status_id = status.id inner join tasklist.priority on tasks.priority_id= priority.id inner join tasklist.users on users.id=tasks.master_id where status_id=3 and tasks.user_id='" . $_SESSION['id'] . "';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function appointed() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.deadline, tasks.add_date, users.login as 'users.login', tasks.master_id from " . $this->table . " inner join tasklist.status on tasks.status_id = status.id inner join tasklist.priority on tasks.priority_id= priority.id inner join tasklist.users on users.id=tasks.user_id where tasks.master_id='" . $_SESSION['id'] . "';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function selectPriority() {

        $query = "select * from priority";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function allUsers() {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function addTask(array $task) {
        if ($this->db->connect_errno === 0) {
            $query = "INSERT INTO `tasks` (`id`, `name`, `user_id`, `description`, `status_id`, `priority_id`, `add_date`, `start_date`, `end_date`, `deadline`, `master_id`) VALUES (NULL, '" . $task['name'] . "', '" . $task['user_id'] . "', '" . $task['description'] . "', '" . $task['statrus_id'] . "', '" . $task['priority_id'] . "', '" . $task['add_date'] . "', NULL, NULL, '" . $task['deadline'] . "', '" . $task['master_id'] . "');";
            return $this->db->query($query);
        }
    }
    public function changStatus($task_id, $status, $fild_date='start_date' ) {
        if ($this->db->connect_errno === 0) {            
            $query = "UPDATE `tasks` SET `status_id` = ".$status.", ".$fild_date."='".date('Y-m-d')."' WHERE `tasks`.`id` = ".$task_id.";";            
            return $this->db->query($query);
        }
    }
    

}
