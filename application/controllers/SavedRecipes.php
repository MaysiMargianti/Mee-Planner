<?php
class SavedRecipes extends CI_Controller {
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
    public $SavedRecipes_model;


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
        $this->load->model('SavedRecipes_model');
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        if ($user_id) {
            $data['saved_recipes'] = $this->SavedRecipes_model->get_saved_recipes($user_id);
            $this->load->view('resep/saved_recipes', $data);
        } else {
            redirect('log'); 
        }
    }

    public function save() {
        $recipe_id = $this->input->post('recipe_id');
        $user_id = $this->session->userdata('user_id');
    
        if ($user_id && $recipe_id) {
            $this->SavedRecipes_model->save_recipe($user_id, $recipe_id);
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
    
}
?>
