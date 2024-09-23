

<div class="content-page">
<div class="content">
    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Quản lý biến thể sản phẩm màu</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Sửa thông tin biến thể màu</h5>
                        </div><!-- end card header -->

                    <div class="card-body">
                       
                        <form action="AdminController.php?act=updateMau" method="POST" enctype="multipart/form-data">
                        <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="ten_danh_muc" class="form-label">Tên màu</label>
                                        <input type="text" id="" name="name" class="form-control" value="<?=$ten_mau ?>" placeholder="Nhập tên màu">
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="ten_danh_muc" class="form-label">Mã màu</label>
                                        <input type="text" id="" name="ma_mau" class="form-control" value="<?=$ma_mau ?>" placeholder="Nhập mã màu">
                                    <td><button style="background-color:<?=$ma_mau?>; color: white; width: 80px; height:30px "></button></td>

                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <button type="submit" name="btn" class="btn btn-primary">Sửa</button>
                        <input type="hidden" name="id_mau" value="<?= $id ?>"> <!-- Trường ẩn chứa id -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div> <!-- content -->

    


   
       
   