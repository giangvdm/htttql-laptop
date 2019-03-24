<?php
    session_start();
    if (!isset($_SESSION['customer-id'])) {
        header('location:../login.php');
    }

    // Add product to cart
    if (isset($_SESSION['customer-id']) && ($_GET['action'] === "add") && isset($_GET['id']) && isset($_GET['quantity'])) {
        if (!in_array($_GET['id'], $_SESSION['product-in-cart'])) { // new product in cart
            array_push($_SESSION['product-in-cart'], $_GET['id']);
            array_push($_SESSION['product-quantity'], $_GET['quantity']);
        }
        else { // product already exists in cart
            $index = array_search($_GET['id'], $_SESSION['product-in-cart']);
            $_SESSION['product-quantity'][$index] += $_GET['quantity'];
        }
    }
    // Remove product from cart
    else if (isset($_SESSION['customer-id']) && ($_GET['action'] === "remove") && isset($_GET['id'])) {
        if (in_array($_GET['id'], $_SESSION['product-in-cart'])) {
            $index = array_search($_GET['id'], $_SESSION['product-in-cart']);
            unset($_SESSION['product-in-cart'][$index]);
            unset($_SESSION['product-quantity'][$index]);
            unset($_SESSION['product-subtotal'][$index]);
        }
    }
    // Checkout, place order
    else if (isset($_SESSION['customer-id']) && ($_GET['action'] === "order")) {
        require('../config/connection.php');
        include('utilities.php');
        include('math.php');

        $arrStockId = array();
        $arrProduct = array();
        $arrOrderId = array(); // $arrOrderId maps with $arrStockId

        // construct a list of involved stocks
        foreach ($_SESSION['product-in-cart'] as $productId) {
            // get product by id
            $sqlReadProductById = "SELECT * FROM dbo.product WHERE product_id = ?";
            $params = array($productId);
            $stmt = sqlsrv_query( $conn, $sqlReadProductById, $params);
            $product = sqlsrv_fetch_array($stmt);
            
            // check if the product stock already in the list
            if (!in_array($product['stock_id'], $arrStockId)) array_push($arrStockId, $product['stock_id']);
            array_push($arrProduct, $product);
        }
        
        // insert N orders to dbo.cart (N = number of stocks involved in this particular order)
        foreach ($arrStockId as $stockId) {
            $sqlInsertOrder = "INSERT INTO dbo.cart (customer_id, stock_id, cart_date, cart_price) VALUES (?,?,?,?)";
            $paramsInsertOrder = array($_SESSION['customer-id'], $stockId, date("Y-m-d"), sumArray($_SESSION['product-subtotal']));
            $stmt = sqlsrv_query( $conn, $sqlInsertOrder, $paramsInsertOrder);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            
            // get the id of the last insert order
            $sqlReadLastOrder = "SELECT TOP 1 * FROM dbo.cart ORDER BY cart_id DESC";
            $st = sqlsrv_query( $conn, $sqlReadLastOrder);
            $lastRow = sqlsrv_fetch_array($st);
            // and add it to the order list
            array_push($arrOrderId, $lastRow['cart_id']);
        }

        // insert N records to dbo.cart_detail (N = number of products in cart)
        for ($i = 0; $i < count($_SESSION['product-in-cart']); $i++) {
            // get stock by product id
            $sqlReadProductStockById = "SELECT stock_id FROM dbo.product WHERE product_id = ?";
            $params = array($_SESSION['product-in-cart'][$i]);
            $stmt = sqlsrv_query( $conn, $sqlReadProductStockById, $params);
            $stock = sqlsrv_fetch_array($stmt);

            // find the index where product's stock is located in $arrStockId
            $j = array_search($stock['stock_id'], $arrStockId);
            $currentOrder = $arrOrderId[$j]; // remember that  $arrOrderId maps with $arrStockId

            $sqlInsertOrderDetail = "INSERT INTO dbo.cart_detail (cart_id, product_id, cd_quantity, cd_price) VALUES (?,?,?,?)";
            $paramsInsertOrderDetail = array($currentOrder, $_SESSION['product-in-cart'][$i], $_SESSION['product-quantity'][$i], $_SESSION['product-subtotal'][$i]);
            $ins = sqlsrv_query( $conn, $sqlInsertOrderDetail, $paramsInsertOrderDetail);
            if ($ins === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        }
        foreach ($_SESSION['product-in-cart'] as $productId) {

            
        }

        // empty the cart
        emptyCart();
    }
    header('location:../cart.php');