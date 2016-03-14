<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Base extends Controller_Template {

    public $template = 'admin/v_base';
    public $auth;
    public $user;

    public function before()
    {
        parent::before();
        $this->template->styles = array(
            '/media/styles/bootstrap.css',
            '/media/styles/other.css'
        );

        $this->template->scripts = array(
            '/media/js/jquery-2.2.1.min.js',
            '/media/js/jquery-ui.min.js',
            '/media/js/bootstrap.min.js',
            '/media/js/angular.js',
            '/media/js/angular-route.js',
            '/media/js/angular-ui-router.min.js',
            '/media/js/app.js',
            '/media/js/controllers.js',
        );

        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();

        /*if (!$this->auth->logged_in('admin') and $this->request->controller() != 'Auth')
        {
            $this->redirect('/admin/auth/login');
        }*/


        $this->template->title = 'Панель управления';
    }

}