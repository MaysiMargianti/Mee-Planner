<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantry_data extends CI_Controller {

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
    public $Pantry_model;


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
        $this->load->model('Pantry_model');
        $this->Pantry_model = $this->Pantry_model;
    }

    public function index() {
        $data['pantry'] = $this->Pantry_model->get_all_pantry();
        $this->load->view('layouting/header');
        // $this->load->view('layouting/sidebar');
        $this->load->view('pantry/pantry_data', $data);
        // $this->load->view('layouting/footer');
    }

    public function add() {
        $this->form_validation->set_rules('ingredient_name', 'Ingredient Name', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouting/header');
            // $this->load->view('layouting/sidebar');
            $this->load->view('pantry/add_pantry');
            // $this->load->view('layouting/footer');
        } else {
            $user_id = $this->session->userdata('user_id');
            if ($user_id === NULL) {
                $this->session->set_flashdata('error', 'User not logged in');
                redirect('login');
            }
    
            $data = array(
                'ingredient_name' => $this->input->post('ingredient_name'),
                'start_date' => $this->input->post('start_date'),
                'exp_date' => $this->input->post('exp_date'),
                'user_id' => $user_id
            );
    
            $this->Pantry_model->insert_data($data);
            $this->session->set_flashdata('message', 'Pantry added successfully!');
            redirect('pantry_data');
        }
    }
    
    

    public function edit($id) {
        $this->form_validation->set_rules('ingredient_name', 'Ingredient Name', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['pantry'] = $this->Pantry_model->get_pantry_by_id($id);
            $this->load->view('layouting/header');
            // $this->load->view('layouting/sidebar');
            $this->load->view('pantry/edit_pantry', $data);
            // $this->load->view('layouting/footer');
        } else {
            $user_id = $this->session->userdata('user_id');
            if ($user_id === NULL) {
                $this->session->set_flashdata('error', 'User not logged in');
                redirect('login');
            }

            $data = array(
                'ingredient_name' => $this->input->post('ingredient_name'),
                'start_date' => $this->input->post('start_date'),
                'exp_date' => $this->input->post('exp_date'),
                'user_id' => $user_id

            );
            $this->Pantry_model->update_data($id, $data);
            $this->session->set_flashdata('message', 'Pantry updated successfully!');
            redirect('pantry_data');
        }
    }
    

    public function delete($id) {
        $this->Pantry_model->delete_data($id);
        redirect('pantry_data');
    }
}
?>
