<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Api extends Controller {

    public $auth;
    public $user;

    public function before()
    {
        parent::before();

        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
    }

    public function action_init()
    {
        $data = array();

        if (!$this->auth->logged_in('admin'))
        {
            $data['auth'] = false;
        }

        else
        {
            $data['auth'] = true;
        }


        $this->response->body(json_encode($data));
    }

}