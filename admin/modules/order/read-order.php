<?php
    require "../config/connection.php";

    // get order by id
    $sqlReadOrderById = "SELECT * FROM dbo.cart WHERE cart_id = ?";
    $params = array($_GET['id']);
    $stmt = sqlsrv_query( $conn, $sqlReadOrderById, $params);
    $order = sqlsrv_fetch_array($stmt);

    // get customer by id
    $sqlReadCustomerById = "SELECT * FROM dbo.customer WHERE customer_id = ?";
    $params = array($order['customer_id']);
    $stmt = sqlsrv_query( $conn, $sqlReadCustomerById, $params);
    $cus = sqlsrv_fetch_array($stmt);

    // get cart_detail by id
    $sqlReadOrderDetailById = "SELECT * FROM dbo.cart_detail WHERE cart_id = ?";
    $params = array($order['cart_id']);
    $stmt = sqlsrv_query( $conn, $sqlReadOrderDetailById, $params);
    $cd = sqlsrv_fetch_array($stmt);
?>
<div class="row">
    <div class="col-md-6">
        <div>Mã đơn hàng: <?php echo $order['cart_id']; ?></div>
        <div>Ngày đặt hàng: <?php echo $order['cart_date']->format("d-m-Y"); ?></div>
        <div>Thành tiền: <?php echo $order['cart_price']; ?> vnđ</div>
    </div>
    <div class="col-md-6">
        <div>Mã khách hàng: <?php echo $order['customer_id']; ?></div>
        <div>Tên khách hàng: <?php echo $cus['customer_name']; ?></div>
    </div>
</div>

