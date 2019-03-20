<?php
    require "../../../config/connection.php";

    $sqlDeleteCustomerById = "DELETE FROM dbo.customer WHERE customer_id = ?";
    $params = array($_GET['id']);
    $stmt = sqlsrv_query( $conn, $sqlDeleteCustomerById, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    header('location:../../index.php?manage=customer&success=delete');

    // close connection
    sqlsrv_close($conn);