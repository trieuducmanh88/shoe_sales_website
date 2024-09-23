<div class="content-page">
    <div class="content">
        <!-- Start Content -->
        <div class="container-xxl">
            
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý sản phẩm biến thể</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Sửa thông tin biến thể sản phẩm</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="AdminController.php?act=updateBienTheSanPham" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="sanpham_id" class="form-label">Sản phẩm</label>
                                            <select name="sanpham_id" id="sanpham_id" class="form-select">
                                                <option value="">Chọn</option>
                                                <?php foreach($LoadSanPham as $items): ?>
                                                    <?php extract($items); ?>
                                                    <option value="<?= ($id_sanpham) ?>" <?= $id_sanpham == $sanpham_id ? 'selected' : '' ?>>
                                                        <?= ($name) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>

                                              
                                            <div>
                                                <?php foreach($LoadSanPham as $items): ?>
                                                    <?php extract($items); ?>
                                                    <?php if($id_sanpham == $sanpham_id): ?>
                                                        <img src="<?= ($img) ?>" alt="" class="img-fluid" width="200">
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>

                                        </div>

                                    </div>

                            
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="size_id" class="form-label">Size sản phẩm</label>
                                            <select name="size_id" id="size_id" class="form-select">
                                                <option value="">Chọn</option>
                                                <?php foreach($LoadSize as $items): ?>
                                                    <?php extract($items); ?>
                                                    <option value="<?= ($id_size) ?>" <?= $id_size == $size_id ? 'selected' : '' ?>>
                                                        <?= ($ten_size) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="color_id" class="form-label">Màu sản phẩm</label>
                                            <select name="color_id" id="color_id" class="form-select">
                                                <option value="">Chọn</option>
                                                <?php foreach($LoadMau as $items): ?>
                                                    <?php extract($items); ?>
                                                    <option value="<?= ($id_mau) ?>" <?= $id_mau == $mau_id ? 'selected' : '' ?>>
                                                        <?= ($ten_mau) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="giaSP" class="form-label">Giá sản phẩm</label>
                                            <input type="number" id="giaSP" name="giaSP" class="form-control" placeholder="Nhập giá sản phẩm" value="<?= ($giaSanPham) ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="giaKhuyenMai" class="form-label">Giá khuyến mãi</label>
                                            <input type="number" id="giaKhuyenMai" name="giaKhuyenMai" class="form-control" placeholder="Nhập giá khuyến mãi" value="<?= ($giaKhuyenMai) ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="so_luong" class="form-label">Số lượng</label>
                                            <input type="number" id="so_luong" name="soluong" class="form-control" placeholder="Nhập số lượng" value="<?= ($soLuong) ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="btn" class="btn btn-primary">Sửa sản phẩm</button>
                                    <input type="hidden" name="idSPBienThe" value="<?= ($id) ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-xxl -->
    </div> <!-- content -->
</div>
