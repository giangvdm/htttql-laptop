<main id="main" data-page-content="product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section>
                    <?php
                        echo "<b>Thêm sản phẩm mới</b>";
                        echo "<hr>";
                        renderAside();
                    ?>
                </section>
            </div>
        </div>
        <br>
        <div>
            <section>
                <table class="table">
                    <caption>Danh sách sản phẩm</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Mô tả sản phẩm</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chocopie</td>
                            <td>Ngon</td>
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
</main>