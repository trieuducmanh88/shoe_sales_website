<div class="content-page">
    <div class="content">
        <!-- Start Content -->
        <div class="container-xxl">
            
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý biến thể sản phẩm </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Thông tin biến thể sản phẩm</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="sanpham_id" class="form-label">Sản phẩm</label>
                                    <p class="form-control-plaintext">
                                        <?php foreach($LoadSanPham as $items): ?>
                                            <?php extract($items); ?>
                                            <?= $id_sanpham == $sanpham_id ? htmlspecialchars($name) : '' ?>
                                        <?php endforeach; ?>
                                    </p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="product_image" class="form-label">Hình ảnh sản phẩm</label>
                                    <div>
                                        <?php foreach($LoadSanPham as $items): ?>
                                            <?php extract($items); ?>
                                            <?php if($id_sanpham == $sanpham_id): ?>
                                                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($name) ?>" class="img-fluid" width="200">
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="size_id" class="form-label">Size sản phẩm</label>
                                    <p class="form-control-plaintext">
                                        <?php foreach($LoadSize as $items): ?>
                                            <?php extract($items); ?>
                                            <?= $id_size == $size_id ? htmlspecialchars($ten_size) : '' ?>
                                        <?php endforeach; ?>
                                    </p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="color_id" class="form-label">Màu sản phẩm</label>
                                    <p class="form-control-plaintext">
                                        <?php foreach($LoadMau as $items): ?>
                                            <?php extract($items); ?>
                                            <?= $id_mau == $mau_id ? htmlspecialchars($ten_mau) : '' ?>
                                        <?php endforeach; ?>
                                    </p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="gia_san_pham" class="form-label">Giá sản phẩm</label>
                                    <p class="form-control-plaintext"><?= htmlspecialchars($giaSanPham) ?></p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi</label>
                                    <p class="form-control-plaintext"><?= htmlspecialchars($giaKhuyenMai) ?></p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label for="so_luong" class="form-label">Số lượng</label>
                                    <p class="form-control-plaintext"><?= htmlspecialchars($soLuong) ?></p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="AdminController.php?act=editSanPhamBienThe&id=<?= htmlspecialchars($id) ?>" class="btn btn-primary">Chỉnh sửa</a>
                                <a href="AdminController.php?act=listBienThe" class="btn btn-secondary ms-2">Quay lại danh sách</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-xxl -->
    </div> <!-- content -->
</div>
