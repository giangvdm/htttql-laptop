<?php
    session_start();
    if (!isset($_SESSION['customer-name'])) {
        header('location:../login.php');
    }

    if (isset($_SESSION['customer-name']) && ($_GET['action'] === "add") && isset($_GET['id']) && isset($_GET['quantity'])) {
        if (!in_array($_GET['id'], $_SESSION['product-in-cart'])) { // new product in cart
            array_push($_SESSION['product-in-cart'], $_GET['id']);
            array_push($_SESSION['product-quantity'], $_GET['quantity']);
        }
        else { // product already exists in cart
            $index = array_search($_GET['id'], $_SESSION['product-in-cart']);
            $_SESSION['product-quantity'][$index] += $_GET['quantity'];
        }
    }
    else if (isset($_SESSION['customer-name']) && ($_GET['action'] === "remove") && isset($_GET['id'])) {
        if (in_array($_GET['id'], $_SESSION['product-in-cart'])) {
            $index = array_search($_GET['id'], $_SESSION['product-in-cart']);
            unset($_SESSION['product-in-cart'][$index]);
            unset($_SESSION['product-quantity'][$index]);
            unset($_SESSION['product-subtotal'][$index]);
        }
    }
    header('location:../cart.php');