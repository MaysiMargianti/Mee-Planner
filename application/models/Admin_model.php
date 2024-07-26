<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login_admin($email, $password) {
        $this->db->where('Email', $email);
        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            $result = $query->row();
            if ($password == $result->Password) {
                return $result;
            }
        }
        return false;
    }
}
?>
