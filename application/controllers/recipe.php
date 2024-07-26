<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends CI_Controller {

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
    public $session;
    public $db;
    public $form_validation;
    public $Recipe_model;

    public function __construct() {
        parent::__construct();
        // Initialize properties
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
        $this->load->model('Recipe_model');
    }

    public function index() {
        $data['recipes'] = $this->Recipe_model->get_all_recipes();
        // $this->load->view('layout/header');
        // $this->load->view('layout/navbar');
        $this->load->view('resep/recipes', $data);
        // $this->load->view('layout/footer');
    }

    // public function view($id) {
    //     $data['recipe'] = $this->Recipe_model->get_recipe_by_id($id);
    //     $this->load->view('resep/recipe_detail', $data);
    // }
}
?>