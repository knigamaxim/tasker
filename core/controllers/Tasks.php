<?php

class Tasks extends AbstractController{
    
    /**
     * Конструкт для ТАСКС
     */
    
     public function __construct() {
        parent::__construct();
        $this->model = new ModelTasks();
     }
    
}
