<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_recipes() {
        $query = $this->db->get('recipe');
        return $query->result_array();
    }

    public function get_recipe_by_id($id) {
        $query = $this->db->get_where('recipe', array('recipe_id' => $id)); 
        return $query->row_array();
    }

	public function insert_data($data) {
        return $this->db->insert('recipe', $data);
    }

    public function update_data($recipe_id, $data) {
        $this->db->where('recipe_id', $recipe_id);
        return $this->db->update('recipe', $data);
    }

    public function delete_data($recipe_id) {
        $this->db->where('recipe_id', $recipe_id);
        return $this->db->delete('recipe');
    }

    public function get_recipe_with_nutrition($recipe_id) {
        $this->db->select('recipe.*, nutrisi_info.protein, nutrisi_info.calories, nutrisi_info.carbo');
        $this->db->from('recipe');
        $this->db->join('nutrisi_info', 'recipe.recipe_id = nutrisi_info.recipe_id', 'left');
        $this->db->where('recipe.recipe_id', $recipe_id);
        $query = $this->db->get();
        return $query->row_array();
    }


    // public function get_recipe_with_nutrition($recipe_id) {
    //         $this->db->select('recipes.*, nutrition.protein, nutrition.calories, nutrition.carbo');
    //         $this->db->from('recipes');
    //         $this->db->join('nutrition', 'recipes.recipe_id = nutrition.recipe_id', 'left');
    //         $this->db->where('recipes.recipe_id', $recipe_id);
    //         $query = $this->db->get();
    //         return $query->row_array();
    //     }
    // }
    

}
?>
