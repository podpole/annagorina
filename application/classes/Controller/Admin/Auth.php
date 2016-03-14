<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_Admin_Base {

    public function before()
    {
        parent::before();
    }

    public function action_login()
    {
        $this->template->title = 'Авторизация';
        $this->template->content = View::factory('admin/v_login');
    }

}