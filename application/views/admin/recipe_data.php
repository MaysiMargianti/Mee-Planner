    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Recipe Name</th>
                    <th>Category</th>
                    <th>Cook Time</th>
                    <th>Ingredient</th>
                    <th>Instructions</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($recipes)) : ?>
                    <?php $no = 1; foreach ($recipes as $recipe): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($recipe['recipe_name']); ?></td>
                        <td><?php echo htmlspecialchars($recipe['category']); ?></td>
                        <td><?php echo htmlspecialchars($recipe['cook_time']); ?></td>
                        <td><?php echo htmlspecialchars($recipe['Ingredient']); ?></td>
                        <td><?php echo htmlspecialchars(substr($recipe['instructions'], 0, 100)) . '...'; ?></td>
                        <td><img src="<?php echo base_url('uploads/'.$recipe['img_recipe']); ?>" width="100" alt="Recipe Image"></td>
                        <td>
							<a href="<?php echo site_url('recipe_data/add'); ?>" class="btn btn-info btn-block mb-2">Add Recipe</a>
                            <a href="<?php echo site_url('recipe_data/edit/'.$recipe['recipe_id']); ?>" class="btn btn-primary btn-block mb-2">Edit Recipe</a>
                            <a href="<?php echo site_url('recipe_data/delete/'.$recipe['recipe_id']); ?>" class="btn btn-danger btn-block" onclick="return confirm('Are you sure?')">Delete Recipe</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" class="text-center">No recipes found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>