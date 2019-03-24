<?php
    require "../../../config/connection.php";

    $sqlDeleteOrderById = "DELETE FROM dbo.cart WHERE cart_id = ?";
    $params = array($_GET['id']);
    $stmt = sqlsrv_query( $conn, $sqlDeleteOrderById, $params);
    if ($stmt === false) {
        header('location:../../index.php?manage=order&error=delete');
    }
    else {
        header('location:../../index.php?manage=order&success=delete');
    }

    // close connection
    sqlsrv_close($conn);