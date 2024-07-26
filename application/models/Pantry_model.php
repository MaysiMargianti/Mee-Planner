<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantry_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_pantry() {
        $query = $this->db->get('pantry');
        return $query->result_array();
    }

    public function get_pantry_by_id($id) {
        $query = $this->db->get_where('pantry', array('pantry_id' => $id)); 
        return $query->row_array();
    }

    public function insert_data($data) {
        if (!$this->db->insert('pantry', $data)) {
            throw new Exception('Insert failed');
        }
    }
    
    public function update_data($id, $data) {
        $this->db->where('pantry_id', $id);
        if (!$this->db->update('pantry', $data)) {
            throw new Exception('Update failed');
        }
    }
    
    public function delete_data($id) {
        $this->db->where('pantry_id', $id);
        if (!$this->db->delete('pantry')) {
            throw new Exception('Delete failed');
        }
    }
}    
?>
