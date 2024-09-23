

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
                            <h5 class="card-title mb-0">Sửa thông tin biến thể size</h5>
                        </div><!-- end card header -->

                    <div class="card-body">
                       
                        <form action="AdminController.php?act=updateSize" method="POST" enctype="multipart/form-data">
                        <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tên size</label>
                                        <input type="text" id="" name="name" class="form-control" value="<?=$ten_size ?>" placeholder="Nhập tên màu">
                                    </div>
                                </div>

                                
                            </div>

                            <div class="d-flex">
                                <button type="submit" name="btn" class="btn btn-primary">Sửa</button>
                        <input type="hidden" name="id_size" value="<?= $id_size ?>"> <!-- Trường ẩn chứa id -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- content -->

    


   
       
   