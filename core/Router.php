<?php

namespace core;

use core\controllers;

class Router {

    static public function init() {
        $url = strtolower($_SERVER['REQUEST_URI']);
        $components_url = explode('/', $url);
        $section = $components_url[1];
        $action = $components_url[2];
        $section = ucfirst($section);
        //задаемм имя класса и метода поумолчанию
        if (empty($section)) {
            $section = 'Main';
        }
        if (empty($action)) {
            $action = 'index';
        }
        //делаем приставку на случай числового $action
        $action_method = 'action_' . $action;
        $section = "\lib\pages\\" . $section;
        if (class_exists($section)) {
            $obj = new $section();
            if (is_numeric($action)) {
                //для переадресации числовых методов на __call
                $obj->$action_method();
            } else {
                if (method_exists($obj, $action_method)) {
                    $obj->$action_method();
                } else {
                    self::notFound();
                }
            }
        } else {
            self::notFound();
        }
    }

    static public function notFound() {
        header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
        include_once 'front/404.php';
        exit();
    }

    static public function root() {
        return $_SERVER[REQUEST_SCHEME] . "://" . $_SERVER[HTTP_HOST];
    }

    static public function redirect($url) {
        header('Location: ' . self::root() . '/' . $url);
        exit();
    }

}
