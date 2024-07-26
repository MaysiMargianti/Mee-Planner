<?php
class SavedRecipes_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_saved_recipes($user_id) {
        $this->db->select('recipe.img_recipe, recipe.recipe_name, recipe.category, recipe.recipe_id');
        $this->db->from('save_recipe');
        $this->db->join('recipe', 'save_recipe.recipe_id = recipe.recipe_id');
        $this->db->where('save_recipe.user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function save_recipe($user_id, $recipe_id) {
        $data = array(
            'user_id' => $user_id,
            'recipe_id' => $recipe_id
        );
        return $this->db->insert('save_recipe', $data);
    }
}
?>
