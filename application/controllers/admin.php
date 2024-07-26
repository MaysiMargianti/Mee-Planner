<?php 

class Admin extends CI_Controller{

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

        $this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function index(){
        $this->load->view('layouting/header');
        $this->load->view('layouting/sidebar');
        $this->load->view('admin/home');
        $this->load->view('layouting/footer');   
     }
}
?>