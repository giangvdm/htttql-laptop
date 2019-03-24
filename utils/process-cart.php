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
        // construct a list of involved stocks
        $arrStock = array();
        foreach ($_SESSION['product-in-cart'] as $productId) {
            // get product by id
            $sqlReadProductById = "SELECT * FROM dbo.product WHERE product_id = ?";
            $params = array($productId);
            $stmt = sqlsrv_query( $conn, $sqlReadProductById, $params);
            $product = sqlsrv_fetch_array($stmt);
            
            // check if the product stock already in the list
            if (!in_array($product['stock_id'], $arrStock)) array_push($arrStock, $product['stock_id']);
        }
        
        // insert a number of orders based on the number of stocks involved
        include('math.php');
        foreach ($arrStock as $stockId) {
            $sqlInsertOrder = "INSERT INTO dbo.cart (customer_id, stock_id, cart_date, cart_price) VALUES (?,?,?,?)";
            $paramsInsertOrder = array($_SESSION['customer-id'], $stockId, date("Y-m-d"), sumArray($_SESSION['product-subtotal']));
            $stmt = sqlsrv_query( $conn, $sqlInsertOrder, $paramsInsertOrder);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
            var_dump($paramsInsertOrder);
        }
        // empty the cart
        include('utilities.php');
        emptyCart();
    }
    header('location:../cart.php');