<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function register_user($username, $email, $password) {
        $this->db->where('username', $username, 'email', $email, 'password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            $result = $query->row();
            if ($password == $result->password) {
                return $result;
            }
        }
        return false;
    }

    public function login_user($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            $result = $query->row();
            if ($password == $result->password) {
                return $result;
            }
        }
        return false;
    }
}
?>
