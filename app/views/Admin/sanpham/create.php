<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý sản phẩm</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Thêm sản phẩm mới</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="AdminController.php?act=storeSanPham" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
                                        <input type="text" id="ten_san_pham" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <label for="danhmuc_id" class="form-label">Danh mục sản phẩm</label>
                                        <select name="danhmuc_id" id="danhmuc_id" class="form-select" required>
                                            <option value="">Chọn danh mục</option>
                                            <?php foreach ($loadDanhMuc as $items): ?>
                                                <option value="<?= htmlspecialchars($items['id_danhmuc']) ?>">
                                                    <?= htmlspecialchars($items['name_danhmuc']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <label for="mota" class="form-label">Mô tả sản phẩm</label>
                                        <textarea name="mota" id="mota" class="form-control" rows="3" placeholder="Nhập mô tả sản phẩm" required></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <label for="img" class="form-label">Ảnh sản phẩm</label>
                                        <input type="file" id="img" name="img" class="form-control" required>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="btn" class="btn btn-primary">Thêm</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- content -->
</div>
