<div class="content-page">
    <div class="content">
        <!-- Start Content -->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý danh mục sản phẩm</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                    <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Sửa thông tin danh mục sản phẩm</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="AdminController.php?act=updateDanhMuc" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="ten_danh_muc" class="form-label">Tên danh mục</label>
                                            <input type="text" id="ten_danh_muc" name="ten_danh_muc" class="form-control" value="<?= htmlspecialchars($name_danhmuc) ?>" placeholder="Nhập tên danh mục">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="btn" class="btn btn-primary">Sửa</button>
                                    <input type="hidden" name="id_danh_muc" value="<?= htmlspecialchars($id_danhmuc) ?>"> <!-- Trường ẩn chứa id -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-xxl -->
    </div> <!-- content -->
</div>
