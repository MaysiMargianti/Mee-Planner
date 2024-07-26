<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe_data extends CI_Controller {

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
    public $upload;

    public function __construct() {
        parent::__construct();
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
        $this->load->library(['session', 'form_validation', 'upload']);
        $this->load->model('Recipe_model');
    }

    public function index() {
        $data['recipes'] = $this->Recipe_model->get_all_recipes();
        $this->load->view('layouting/header');
        $this->load->view('layouting/sidebar');
        $this->load->view('admin/recipe_data', $data);
        $this->load->view('layouting/footer');
    }

    public function add() {
        $this->form_validation->set_rules('recipe_name', 'Recipe Name', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('cook_time', 'Cook Time', 'required');
        $this->form_validation->set_rules('Ingredient', 'Ingredient', 'required');
        $this->form_validation->set_rules('instructions', 'Instructions', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouting/header');
            $this->load->view('layouting/sidebar');
            $this->load->view('admin/add_recipe');
            $this->load->view('layouting/footer');
        } else {
            $img_recipe = $_FILES['img_recipe']['name'];
            if ($img_recipe) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $this->upload->initialize($config);
                
                if (!$this->upload->do_upload('img_recipe')) {
                    echo "Image upload failed!"; die();
                } else {
                    $img_recipe = $this->upload->data('file_name');
                }
            } else {
                $img_recipe = ''; 
            }

            $data = array(
                'recipe_name' => $this->input->post('recipe_name'),
                'category' => $this->input->post('category'),
                'cook_time' => $this->input->post('cook_time'),
                'Ingredient' => $this->input->post('Ingredient'),
                'instructions' => $this->input->post('instructions'),
                'img_recipe' => $img_recipe
            );
            $this->Recipe_model->insert_data($data);
            $this->session->set_flashdata('message', 'Recipe added successfully!');
            redirect('recipe_data');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('recipe_name', 'Recipe Name', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('cook_time', 'Cook Time', 'required');
        $this->form_validation->set_rules('Ingredient', 'Ingredient', 'required');
        $this->form_validation->set_rules('instructions', 'Instructions', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['recipe'] = $this->Recipe_model->get_recipe_by_id($id);
            $this->load->view('layouting/header');
            $this->load->view('layouting/sidebar');
            $this->load->view('admin/edit_recipe', $data);
            $this->load->view('layouting/footer');
        } else {
            $img_recipe = $_FILES['img_recipe']['name'];
            if ($img_recipe) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $this->upload->initialize($config);
                
                if (!$this->upload->do_upload('img_recipe')) {
                    echo "Image upload failed!"; die();
                } else {
                    $img_recipe = $this->upload->data('file_name');
                }
            } else {
                $img_recipe = $this->input->post('old_img_recipe');
            }

            $data = array(
                'recipe_name' => $this->input->post('recipe_name'),
                'category' => $this->input->post('category'),
                'cook_time' => $this->input->post('cook_time'),
                'Ingredient' => $this->input->post('Ingredient'),
                'instructions' => $this->input->post('instructions'),
                'img_recipe' => $img_recipe
            );

            $this->Recipe_model->update_data($id, $data);
            redirect('recipe_data');
        }
    }

    public function delete($id) {
        $this->Recipe_model->delete_data($id);
        redirect('recipe_data');
    }
}
?>
