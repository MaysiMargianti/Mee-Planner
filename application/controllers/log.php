<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
    public $benchmark;
    public $hooks;
    public $config;
    public $log;
    public $utf8;
    public $uri;
    public $router;
    public $output;
    public $security;
    public $input;
    public $lang;
    public $load;
    public $db;
    public $session;
    public $form_validation;
    public $exceptions;
    public $User_model;
    public $Admin_model;
  
  
    public function __construct() {
      parent::__construct();
  
      $this->load->helper('url');
  
          $this->benchmark = &load_class('Benchmark', 'core');
          $this->hooks = &load_class('Hooks', 'core');
          $this->config = &load_class('Config', 'core');
          $this->log = &load_class('Log', 'core');
          $this->utf8 = &load_class('Utf8', 'core');
          $this->uri = &load_class('URI', 'core');
          $this->router = &load_class('Router', 'core');
          $this->output = &load_class('Output', 'core');
          $this->security = &load_class('Security', 'core');
          $this->input = &load_class('Input', 'core');
          $this->lang = &load_class('Lang', 'core');
          $this->load->model('User_model');
          $this->load->model('Admin_model');
          $this->load->library('session');
          $this->load->database();
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User_model->login_user($email, $password);
        if ($user) {
            $this->session->set_userdata('user_id', $user->user_id);
            redirect('Welcome');
        } else {
            $admin = $this->Admin_model->login_admin($email, $password);
            if ($admin) {
                $this->session->set_userdata('admin_id', $admin->id_admin);
                redirect('admin');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('Log');
            }
        }
    }

    public function register() {
        $this->load->view('register');
    }

    public function register_user() {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password') 
        );

        $this->User_model->register_user($data);
        redirect('Log');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Log');
    }

    public function is_logged_in() {
        return $this->session->userdata('user_id') ? true : false;
    }
}
?>