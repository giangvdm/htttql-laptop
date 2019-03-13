<form action="" method="POST">
    <input type="hidden" name="brand-id" value="<?php echo $_GET['id'] ?>">
    <div class="form-group">
        <label for="brand-name-input">Tên thương hiệu/nhà sản xuất</label>
        <input type="text" class="form-control" name="brand-name-input" id="brand-name-input" required>
    </div>
    <input type="submit" class="btn btn-success" name="update" value="Cập nhật">
</form>