<?php
namespace core\models;


/**
 * класс для работы с ТАSKS-заданиями
 */

class ModelTasks extends AbstractModel{
    
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
   

    
    
    
}
