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
    
//    public function addNews($news) {
//	$query="INSERT INTO ".$this->table." (name, short_text, text, date) VALUES ('".$news['name']."', '".$news['short_text']."', '".$news['text']."', '".$news['date']."')";	
//	return $this->db->query($query);
//    }




    public function all() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.deadline, users.name as 'users.name' from " . $this->table . " inner join taskslist.status on tasks.status_id = status.id inner join taskslist.priority on tasks.priority_id= priority.id inner join taskslist.users on users.id=tasks.user_id where status_id=2 and users.name='".$_SESSION['login']."';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function new_tasks() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.deadline, users.name as 'users.name' from " . $this->table . " inner join taskslist.status on tasks.status_id = status.id inner join taskslist.priority on tasks.priority_id= priority.id inner join taskslist.users on users.id=tasks.user_id where status_id=1 and users.name='".$_SESSION['login']."';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

    public function archive() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.deadline, users.name as 'users.name' from " . $this->table . " inner join taskslist.status on tasks.status_id = status.id inner join taskslist.priority on tasks.priority_id= priority.id inner join taskslist.users on users.id=tasks.user_id where status_id=3 and users.name='".$_SESSION['login']."';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }
    public function appointed() {

        $query = "select tasks.name, tasks.description, status.name as 'status.name', priority.name as 'priority.name', tasks.start_date, tasks.deadline, users.name as 'users.name' from " . $this->table . " inner join taskslist.status on tasks.status_id = status.id inner join taskslist.priority on tasks.priority_id= priority.id inner join taskslist.users on users.id=tasks.master_id where users.name='".$_SESSION['login']."';";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return false;
    }

}
