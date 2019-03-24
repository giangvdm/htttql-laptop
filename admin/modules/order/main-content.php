<?php
    require "../config/connection.php";
?>

<main id="main" data-page-content="order">
    <div class="container">
        <?php
            // Alert boxes
            include('webpage-components/alert-box.php');
        ?>

        <div class="row">
            <!-- <div class="col-md-3">
                <aside class="left">
                    <?php
                        echo "<b>Thêm nhà sản xuất mới</b>";
                        echo "<hr>";
                        renderAside();
                    ?>
                </aside>
            </div> -->

            <?php
                // Select all orders in databse
                $sqlReadAllOrders = "SELECT * FROM dbo.cart ORDER BY cart_date DESC";
                $allOrders = sqlsrv_query( $conn, $sqlReadAllOrders);
            ?>
            <div class="col-md-12">
                <section class="right">
                    <table class="table">
                        <caption>Danh sách đơn hàng</caption>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Mã khách hàng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Ngày đặt hàng</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Show all orders -->
                            <?php
                                $i = 0;
                                while ($order = sqlsrv_fetch_array($allOrders)) {
                            ?>
                                    <tr>
                                        <td><?php echo $order['cart_id'] ?></td>
                                        <td><?php echo $order['customer_id']; ?></td>
                                        <td><?php echo $order['cart_price']; ?></td>
                                        <td><?php echo $order['cart_date']->format("d-m-Y"); ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-info"
                                                    onclick="window.location.href='index.php?manage=order&action=update&id= <?php echo $order['order_id']; ?> '">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button>
                                            <button class="btn btn-danger"
                                                    onclick="window.location.href='modules/order/delete-order.php?id= <?php echo $order['order_id']; ?> '">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</main>