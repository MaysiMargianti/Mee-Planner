<div class="container">
    <h2>Edit Pantry</h2>
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo site_url('pantry_data/edit/' . $pantry['pantry_id']); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="ingredient_name">Nama Bahan</label>
            <input type="text" class="form-control" id="ingredient_name" name="ingredient_name" value="<?php echo htmlspecialchars($pantry['ingredient_name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="start_date">Tanggal Mulai/Membeli Bahan</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo htmlspecialchars($pantry['start_date']); ?>" required>
        </div>
        <div class="form-group">
            <label for="exp_date">Tanggal Kedaluwarsa</label>
            <input type="date" class="form-control" id="exp_date" name="exp_date" value="<?php echo htmlspecialchars($pantry['exp_date']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
