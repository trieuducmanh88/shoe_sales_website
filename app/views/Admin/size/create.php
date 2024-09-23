<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý biến thể sản phẩm size</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Thêm size mới</h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="AdminController.php?act=storeSize" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <label for="ten_size" class="form-label">Tên size</label>
                                        <input type="text" id="ten_size" name="name" class="form-control" placeholder="Nhập tên size" required>
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
