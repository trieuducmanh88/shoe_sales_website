<div class="content-page">
    <div class="content">
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý sản phẩm </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Thêm sản phẩm biến thể</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="AdminController.php?act=storeBienTheSanPham" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label">Tên sản phẩm</label>
                                            <select name="sanpham_id" id="" class="form-select">
                                                <option value="">Chọn</option>
                                                <?php 
                                                foreach($LoadSanPham as $items){
                                                    extract($items);
                                                    echo ' <option value="'.$id_sanpham.'"> '.$name.' </option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label">Size sản phẩm</label>
                                            <select name="size_id" id="" class="form-select">
                                                <option value="">Chọn</option>
                                                <?php 
                                                foreach($LoadSize as $items){
                                                    extract($items);
                                                    echo ' <option value="'.$id_size.'"> '.$ten_size.' </option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label">Màu sản phẩm</label>
                                            <select name="color_id" id="" class="form-select">
                                                <option value="">Chọn</option>
                                                <?php 
                                                foreach($LoadMau as $items){
                                                    extract($items);
                                                    echo ' <option value="'.$id_mau.'"> '.$ten_mau.' </option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="gia_san_pham" class="form-label">Giá sản phẩm</label>
                                            <input type="number"  name="giaSP" class="form-control"  placeholder="Chọn giá sản phẩm " value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi</label>
                                            <input type="number" id="gia_khuyen_mai" name="giaKhuyenMai" class="form-control" placeholder="Chọn giá khuyến mãi " value="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="so_luong" class="form-label">Số lượng</label>
                                            <input type="number" id="so_luong" name="soluong" class="form-control" placeholder="Chọn số lượng " value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="btn" class="btn btn-primary">Thêm sản phẩm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- content -->
</div>
