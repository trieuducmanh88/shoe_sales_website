<div class="content-page">
    <div class="content">
        <!-- Start Content -->
        <div class="container-xxl">
            
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Chi tiết danh mục sản phẩm</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title">Thông tin danh mục</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="ten_danh_muc" class="form-label">Tên danh mục : <?= $name_danhmuc ?></p></label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <a href="AdminController.php?act=editDanhMuc&id=<?= $id_danhmuc ?>" class="btn btn-primary">Chỉnh sửa</a>
                                <a href="AdminController.php?act=ListDanhMuc" class="btn btn-secondary ms-2">Quay lại danh sách</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- content -->
</div>
