<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tpl extends Controller {

    public function action_index()
    {
        $this->response->body('hello, world!');
    }

    public function action_login()
    {
        $tpl = View::factory('tpl/v_login');
        $this->response->body($tpl);
    }

    public function action_dashboard()
    {
        $tpl = View::factory('tpl/v_dashboard');
        $this->response->body($tpl);
    }

}