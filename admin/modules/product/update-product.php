<form action="" method="POST">
    <input type="hidden" name="customer-id" value="<?php echo $_GET['id'] ?>">
    <form action="" method="POST">
    <div class="form-group">
        <label for="customer-name-input">Tên khách hàng</label>
        <input type="text" class="form-control" name="customer-name-input" id="customer-name-input" required>
    </div>
    <div class="form-group">
        <label for="username-input">Tên đăng nhập</label>
        <input type="text" class="form-control" name="username-input" id="username-input" required>
    </div>
    <div class="form-group">
        <label for="password-input">Mật khẩu</label>
        <input type="text" class="form-control" name="password-input" id="password-input" required>
    </div>
    <div class="form-group">
        <label for="address-input">Địa chỉ</label>
        <input type="text" class="form-control" name="address-input" id="address-input" required>
    </div>
    <input type="submit" class="btn btn-info" name="add" value="Thêm">
</form>
    <input type="submit" class="btn btn-success" name="update" value="Cập nhật">
</form>