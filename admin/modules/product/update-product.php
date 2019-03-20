<?php
    require "../config/connection.php";

    $sqlReadProductById = "SELECT * FROM dbo.product WHERE product_id = ?";
    $params = array($_GET['id']);
    $stmt = sqlsrv_query( $conn, $sqlReadProductById, $params);
    $product = sqlsrv_fetch_array($stmt);

    // Select all stocks in databse
    $sqlReadAllStocks = "SELECT * FROM dbo.stock ORDER BY stock_name ASC";
    $allStocks = sqlsrv_query( $conn, $sqlReadAllStocks);

    // Select all categories in databse
    $sqlReadAllCategories = "SELECT * FROM dbo.category ORDER BY category_name ASC";
    $allCategories = sqlsrv_query( $conn, $sqlReadAllCategories);

    // Select all brands in databse
    $sqlReadAllBrands = "SELECT * FROM dbo.brand ORDER BY brand_name ASC";
    $allBrands = sqlsrv_query( $conn, $sqlReadAllBrands);
?>

<form action="modules/product/process.php" method="POST">
    <input type="hidden" name="product-id" value="<?php echo $_GET['id']; ?>">
    <div class="form-group">
        <label for="product-stock-input">Kho</label>
        <select class="form-control" name="product-stock" id="product-stock-input" selected="selected">
            <?php
                $i = 0;
                while ($stock = sqlsrv_fetch_array($allStocks)) {
            ?>
                    <option value="<?php echo $stock['stock_id']; ?>"><?php echo $stock['stock_name']; ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="product-name-input">Tên sản phẩm</label>
        <input type="text" class="form-control" name="product-name" id="product-name-input" value="<?php echo $product['product_name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="product-category-input">Loại sản phẩm</label>
        <select class="form-control" name="product-category" id="product-category-input" selected="selected">
            <?php
                $i = 0;
                while ($category = sqlsrv_fetch_array($allCategories)) {
            ?>
                    <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
            <?php
                } 
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="product-brand-input">Thương hiệu</label>
        <select class="form-control" name="product-brand" id="product-brand-input" selected="selected">
            <?php
                $i = 0;
                while ($brand = sqlsrv_fetch_array($allBrands)) {
            ?>
                    <option value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="product-price-input">Giá sản phẩm</label>
        <input type="number" min="0" class="form-control" name="product-price" id="product-price-input"
            value="<?php echo $product['product_price']; ?>" required>
    </div>
    <div class="form-group">
        <label for="product-description-input">Mô tả sản phẩm</label>
        <textarea name="product-desc" id="product-description-input" cols="74" rows="5">
            <?php echo $product['product_desc']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="product-img-input">Hình ảnh sản phẩm</label>
        <input type="file" class="form-control-file" name="product-img" id="product-img-input" accept="image/*"
            value="<?php echo $product['product_img']; ?>" required>
    </div>
    <div class="form-group">
        <label for="product-quantity-input">Số lượng</label>
        <input type="number" min="0" class="form-control" name="product-quantity" id="product-quantity-input"
            value="<?php echo $product['product_quantity']; ?>" required>  
    </div>
    <input type="submit" class="btn btn-info" name="add" value="Thêm">
</form>