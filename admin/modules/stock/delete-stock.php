<?php
    require "../../../config/connection.php";

    $sqlDeleteStockById = "DELETE FROM dbo.stock WHERE stock_id = ?";
    $params = array($_GET['id']);
    $stmt = sqlsrv_query( $conn, $sqlDeleteStockById, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    header('location:../../index.php?manage=stock&success=delete');

    // close connection
    sqlsrv_close($conn);