<main id="main" data-page-content="category">
    <div class="container">
        <!-- Error box -->
        <?php
            if ($error = isset($_GET['error'])):
                switch ($error) {
                    case 'create':
        ?>
                        <div class="alert alert-warning alert-dismissable fade show" role="alert">
                            Loại hàng đã tồn tại! Vui lòng nhập lại!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
        <?php
                        break;
                    case 'update':
        ?>
                        <div class="alert alert-warning alert-dismissable fade show" role="alert">
                            Có lỗi xảy ra! Dữ liệu không được cập nhật!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
        <?php
                        break;
                    case 'delete':
        ?>
                        <div class="alert alert-warning alert-dismissable fade show" role="alert">
                            Có lỗi xảy ra! Dữ liệu không được xóa!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
        <?php
                        break;
                }
            endif;
        ?>

        <div class="row">
            <div class="col-md-3">
                <aside class="left">
                    <?php
                        echo "<b>Thêm nhà sản xuất mới</b>";
                        echo "<hr>";
                        renderAside();
                    ?>
                </aside>
            </div>
            <div class="col-md-9">
                <section class="right">
                    <table class="table">
                        <caption>Danh sách loại hàng</caption>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên loại hàng</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</main>