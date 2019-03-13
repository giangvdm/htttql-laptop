<form action="" method="POST">
    <input type="hidden" name="category-id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="brand-name-input">Tên loại hàng</label>
        <input type="text" class="form-control" name="category-name-input" id="category-name-input" required>
    </div>
    <input type="submit" class="btn btn-success" name="update" value="Cập nhật">
</form>