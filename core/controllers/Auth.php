<?php

class Auth extends AbstractController {

    public function __construct() {
        parent::__construct();
        $this->processor = new ModelAuth();
        $this->displayer->template = "auth_template.php";
    }

    public function action_index() {
        $this->displayer->content_view = "auth.php";
        $this->displayer->show();
    }

    public function action_register() {
        $this->displayer->content_view = "register.php";
        $this->displayer->show();
    }

    //Регистрация
    public function action_adduser() {
        $user = filter_input_array(INPUT_POST);
        $user['referral_link'] = self::generateLink(12);
        if ($this->user_validate($user)) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            $this->processor->addUser($user);
        }
        Router::redirect('auth/');
    }

    //Авторизация
    public function action_signin() {
        $user = filter_input_array(INPUT_POST);
        $user_item = $this->processor->selectByName($user['login']);

        if ($user_item) {
            if (password_verify($user['password'], $user_item->password)) {
                $_SESSION['login'] = $user_item->login;
            }
        }
        Router::redirect('admin/');
    }

    //Проверки
    private function user_validate(array $user) {
        if ($user['password'] !== $user['password_confirm']) {
            return false;
        }
        $user_item = $this->processor->selectByName($user['login']);
        if ($user_item) {
            return false;
        }
        return true;
    }

    static public function getAuthLogin() {
        if (empty($_SESSION['login'])) {
            return false;
        }
        return $_SESSION['login'];
    }

    //Выход из сессии
    public function action_exit() {
        session_destroy();
        Router::redirect('auth/');
    }

    //Генерируем referral_link исходя из имени и фамилии
    static function generateLink($length = 12) {
        $user = filter_input_array(INPUT_POST);
        $str = $user['name'] . $user['surname'];
        $numChars = strlen($str);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($str, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

}