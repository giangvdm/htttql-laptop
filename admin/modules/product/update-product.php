<?php
    require "../config/connection.php";

    // Select all categories in databse
    $sqlReadAllCategories = "SELECT * FROM dbo.category ORDER BY category_name ASC";
    $allCategories = sqlsrv_query( $conn, $sqlReadAllCategories);

    // Select all brands in databse
    $sqlReadAllBrands = "SELECT * FROM dbo.brand ORDER BY brand_name ASC";
    $allBrands = sqlsrv_query( $conn, $sqlReadAllBrands);
?>

<form action="modules/product/process.php" method="POST">
    <div class="form-group">
        <label for="product-name-input">Tên sản phẩm</label>
        <input type="text" class="form-control" name="product-name" id="product-name-input" required>
    </div>
    <div class="form-group">
        <label for="product-category-input">Loại sản phẩm</label>
        <select class="form-control" name="product-category" id="product-category-input">
            <?php
                $i = 0;
                while ($category = sqlsrv_fetch_array($allCategories)) {
            ?>
                    <option value="<?php echo $category['brand-name']; ?>"><?php echo $category['category_name']; ?></option>
            <?php
                } 
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="product-brand-input">Thương hiệu</label>
        <select class="form-control" name="product-brand" id="product-brand-input">
            <?php
                $i = 0;
                while ($brand = sqlsrv_fetch_array($allBrands)) {
            ?>
                    <option value="<?php echo $brand['brand-name']; ?>"><?php echo $brand['brand_name']; ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="product-price-input">Giá sản phẩm</label>
        <input type="number" min="0" class="form-control" name="product-price" id="product-price-input" required>
    </div>
    <div class="form-group">
        <label for="product-description-input">Mô tả sản phẩm</label>
        <textarea name="product-desc" id="product-description-input" cols="74" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="product-img-input">Hình ảnh sản phẩm</label>
        <input type="file" class="form-control-file" name="product-img" id="product-img-input" accept="image/*" required>
    </div>
    <input type="submit" class="btn btn-info" name="add" value="Thêm">
</form>