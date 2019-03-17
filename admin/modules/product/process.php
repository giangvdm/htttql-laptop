<?php
    if (isset($_POST['create'])) {
        if ($_POST['product-name'] == "") {
            echo '<script language="javascript">';
            echo 'alert("Xin hãy điền đầy đủ thông tin!")';
            echo '</script>';
        }
        else {
            require "../../../config/connection.php";
            
            $sqlCheckValidProductName = "SELECT product_name FROM dbo.product WHERE product_name = ?";
            $params = array($_POST['product-name']);
            $check = sqlsrv_query( $conn, $sqlCheckValidProductName, $params);
            if ($row = sqlsrv_fetch_array( $check, SQLSRV_FETCH_ASSOC)) {
                header('location:../../index.php?manage=product&error=create');
            }
            else {
                $sqlInsertProduct = "INSERT INTO dbo.product (product_name) VALUES (?)";
                $stmt = sqlsrv_query( $conn, $sqlInsertProduct, $params);
                if ($stmt === false) {
                    die(print_r(sqlsrv_errors(), true));
                }
                header('location:../../index.php?manage=product&success=create');
            }

            // close connection
            sqlsrv_close($conn);
        }
    }
    else if (isset($_POST['update'])) {
        require "../../../config/connection.php";
        
        $sqlUpdateProduct = "UPDATE dbo.product SET product_name = ? WHERE product_id = ?";
        $params = array($_POST['product-name'], $_POST['product-id']);
        $stmt = sqlsrv_query( $conn, $sqlUpdateProduct, $params);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        header('location:../../index.php?manage=product&success=update');
        
        // close connection
        sqlsrv_close($conn);
    }