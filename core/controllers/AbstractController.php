<?php

namespace core\controllers;
use core\Views;

abstract class AbstractController implements defaultable {
      /**
     * объект предназначенный для сбора верстки
     * @var Views 
     */
    protected $viewer;
    /**
     * объект для работы с данными
     * @var AbstractModel
     */
    protected $model;

    public function __construct() {
	$this->viewer = new Views();
    }

    
    public function __call($name, $arguments) {
	Router::notFound();
    }
}
