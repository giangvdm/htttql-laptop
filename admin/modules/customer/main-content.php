<main id="main" data-page-content="customer">
    <div class="container">
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
                        <caption>Danh sách khách hàng đã đăng ký</caption>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Tên đăng nhập</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Phúc</td>
                                <td>ngqphuc2011</td>
                                <td>
                                    <button class="btn btn-success">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</main>