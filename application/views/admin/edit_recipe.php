<div class="container">
    <h2>Edit Recipe</h2>
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo site_url('recipe_data/edit/' . $recipe['recipe_id']); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="recipe_name">Recipe Name</label>
            <input type="text" class="form-control" id="recipe_name" name="recipe_name" value="<?php echo htmlspecialchars($recipe['recipe_name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="<?php echo htmlspecialchars($recipe['category']); ?>" required>
        </div>
        <div class="form-group">
            <label for="cook_time">Cook Time</label>
            <input type="text" class="form-control" id="cook_time" name="cook_time" value="<?php echo htmlspecialchars($recipe['cook_time']); ?>" required>
        </div>
        <div class="form-group">
            <label for="Ingredient">Ingredient</label>
            <textarea class="form-control" id="Ingredient" name="Ingredient" rows="3" required><?php echo htmlspecialchars($recipe['Ingredient']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="instructions">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="5" required><?php echo htmlspecialchars($recipe['instructions']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="img_recipe">Image</label>
            <input type="file" class="form-control" id="img_recipe" name="img_recipe" accept="image/*">
            <input type="hidden" name="old_img_recipe" value="<?php echo htmlspecialchars($recipe['img_recipe']); ?>">
            <?php if ($recipe['img_recipe']): ?>
                <img src="<?php echo base_url('uploads/'.$recipe['img_recipe']); ?>" width="100" alt="Recipe Image">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
